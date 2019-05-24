<?php
class Pagseguro extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('pagseguro_model');
		$this->load->model('pages_model');
		$this->load->helper('date');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->config('email');
		$this->load->library('email');

	}

	public function teste_pag(){
		$this->load->view('tests/test_pag');
	}



	/*public function trata_pag(){
		$token = $this->input->post('token');
		$email = $this->input->post('email');
		$currency = $this->input->post('currency');
		$itemId1 = $this->input->post('itemId1');
		$itemQuantity1 = $this->input->post('itemQuantity1');
		$itemDescription1 = $this->input->post('itemDescription1');
		$itemAmount1 = $this->input->post('itemAmount1');

		/*$parâmetros['token'] = $token;
		$parâmetros['email'] = $email;
		$parâmetros['currency'] = $currency;
		$parâmetros['itemId1'] = $itemId1;
		$parâmetros['itemQuantity1'] = $itemQuantity1;
		$parâmetros['itemDescription1'] = $itemDescription1;
		$parâmetros['itemAmount1'] = 1;

		$query = http_build_query(
			array(
				'token' => $token,
				'email' => $email,
				'currency' => $currency,
				'itemId1' => $itemId1,
				'itemQuantity1' => $itemQuantity1,
				'itemDescription1' => $itemDescription1,
				'itemAmount1'=> 1.52
			)
		);

		$context = stream_context_create(array(
			'http' => array(
				'method'  => 'POST',
				'header' => "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
				'content' => $query,
			)
		));

		$doc = file_get_contents('https://ws.pagseguro.uol.com.br/v2/checkout', null, $context);
		$doc = simplexml_load_string($doc);
		$tokie = $doc -> code;
		$data = array('tokie' => $tokie, 'doc' => $parâmetros);

		$this->load->view('result-test', $data);
	}
*/

	public function criaHTML($informacoes = null)
	{
	}

	public function enviaEmail($email = 'italoctb@gmail.com', $informacoes = null, $mensagem = 'email enviado com sucesso!'){ //$titular, $dataEvento, $nomeEvento, $preco, $lote, $dataCompra, idIngresso){

		$from = $this->config->item('smtp_user');

		$this->email->from($from, 'Congresso ExpoHair 2019 - Sobral');
        $this->email->to($email);
        $this->email->subject('Ingresso do Show');
        $this->email->message($this->criaHTML($informacoes));


		if ($this->email->send()) {
			echo 'Compra de Stand(s) realizada com sucesso, em breve você receberá um e-mail de confirmação. (2 dias úteis, após a confimação do pagamento)';
			sleep(12);
			redirect(base_url());
		} else {
			show_error($this->email->print_debugger());
		}

	}


	public function submit_stand(){

	}

	public function recebidos(){

		$flag = true;   //TRUE = Real; FALSE = SANDBOX

		if($flag){
			$urlnotify = 'https://ws.pagseguro.uol.com.br/v3/transactions/notifications/';
			$id = 'ae50af72-db75-4b99-a2dd-dbde8e6e23323e76e1eb4391a482913211f770c15967301b-add2-451d-b266-0bd5925d5b3a';
			//$id = 'edb6f6de-3125-401c-a1cf-664af789e6c7e9dc25cc459293ba57a61ee7cab448c08673-200c-4642-a41f-fcfd8fd086fa';
		}else{
			$urlnotify = 'https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/';
			$id = '4108EBCEF6A34AEAAB72579116A5DCC0';
		}

		$notificationCode = $this->input->post('notificationCode');
		$data = array(
			'token' => $id,
			'email' => 'vendas@congressoexpohair.com.br',
		);

		$data = http_build_query($data);

		$curl = curl_init($urlnotify.$notificationCode.'?'.$data);

		curl_setopt($curl, CURLOPT_ENCODING ,"UTF-8");
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

		$xml= curl_exec($curl);

		curl_close($curl);

		echo $xml;
		$xml = simplexml_load_string($xml);


		/*echo $xml ->code; echo "</br>";
        echo $xml ->grossAmount; echo "</br>";
        echo $xml ->date; echo "</br>";
        echo $xml ->lastEventDate; echo "</br>";
        echo $xml ->cancellationSource; echo "</br>";
        echo $xml ->status; echo "</br>";*/


		/*echo $xml->cancellationSource == null;
		echo 'passeiaki';echo "</br>";*/

		//echo $xml->date;
		if ($xml->cancellationSource){
			$cancel = $xml->cancellationSource;
			//echo 'passeiaki';
		}else{
			$cancel = null;
		}


		$datestring = '%Y%m%d%H%i%s';

		//$code = preg_replace("/[^a-zA-Z0-9]+/", "", $s);

		$dados_recebidos = array(

			'idSTATUS' => $xml->status,
			'idPROCESSAMENTO' => $xml->code,
			'idNOTIFICA' => $notificationCode,
			'valor_compra' => $xml->grossAmount,
			'tipoPagamento' => $xml->paymentMethod->type,
			'origemCancel' => $cancel,
			'lastEvent' =>  $xml->lastEventDate,
			'dataCompra' => $xml->date,

		);

		//echo $dados_recebidos['dataCompra'];
		//echo "Nem fui!";
		if($this->pagseguro_model->verificaNotification($dados_recebidos['idPROCESSAMENTO'])){
			$this->pagseguro_model->updateNotification($dados_recebidos);
			//echo "parei aqui!";
		}else{
			$this->pagseguro_model->insertNotification($dados_recebidos);
			$this->pagseguro_model->setDadoCompra($xml->reference, $xml->code);
			//echo "WTF!";
		}





	}

	public function criaIngresso($cpf, $idSHOWS, $lote, $idCOMPRAS){
		$dataTicket1 = array(
			'cpf' => $cpf,
			'lote' => $lote,
			'idSHOWS' => $idSHOWS,
			'idCOMPRAS' => $idCOMPRAS
		);

		$this->pages_model->insert_db_ingresso($dataTicket1);
	}

	public function submitingressos(){

		$flag = true;   //TRUE = Real; FALSE = SANDBOX

		if($flag){
			$urlcheck = 'https://ws.pagseguro.uol.com.br/v2/checkout';
			$urltransaction = 'https://pagseguro.uol.com.br/v2/checkout/payment.html?code=';
			$id = 'ae50af72-db75-4b99-a2dd-dbde8e6e23323e76e1eb4391a482913211f770c15967301b-add2-451d-b266-0bd5925d5b3a';
			//$id = 'edb6f6de-3125-401c-a1cf-664af789e6c7e9dc25cc459293ba57a61ee7cab448c08673-200c-4642-a41f-fcfd8fd086fa';
		}else{
			$urlcheck = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
			$urltransaction = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=';
			$id = '4108EBCEF6A34AEAAB72579116A5DCC0';
		}

		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$cpf = str_replace(array('.','-'), '', $this->input->post('cpf'));
		$sexo = $this->input->post('sexo');
		$cidade = $this->input->post('cidade');
		$bairro = $this->input->post('bairro');
		$telefone = $this->input->post('telefone');
		$format = "%d.00";
		$num1 = $this->input->post('num1');
		$l1 = $this->input->post('l1');
		$num2 = $this->input->post('num2');
		$l2 = $this->input->post('l2');
		$num3 = $this->input->post('num3');
		$l3 = $this->input->post('l3');
		$num4 = $this->input->post('num4');
		$l4 = $this->input->post('l4');
		$num5 = $this->input->post('num5');
		$l5 = $this->input->post('l5');
		$num6 = $this->input->post('num6');
		$l6 = $this->input->post('l6');
		$num7 = $this->input->post('num7');
		$l7 = $this->input->post('l7');
		$i = 1;

//			$combos = $this->input->post('combos_select');
//			$workshops = $this->input->post('workshops_select');
//			$cursos = $this->input->post('cursos_select');
//			$concursos = $this->input->post('concursos_select');
//			$token1 = 0;
//			$token2 = 0;
//			$token3 = 0;
//			$datestring = '%Y%m%d%H%i%s';
//			$time = now("America/Fortaleza");
//			$tempo_atual = mdate($datestring,$time);
//			$total = 0;
//			$free = 2;

//			if($combos != null){
//				foreach ($combos as $combo){
//					$total = $total + $this->pages_model->consulta_preco_combos($combo)->preco;
//				}
//				$free = 100;
//				$token1 = SHA1(rand());
//				$token2 = SHA1(rand());;
//				$token3 = SHA1(rand());;
//			}/*Faço ou não checagem*/
//			if($workshops != null){
//				foreach ($workshops as $workshop){
//					$total = $total + $this->pages_model->consulta_preco_atividades($workshop)->preco;
//				}
//			}
//			if($cursos != null){
//				foreach ($cursos as $curso){
//					$total = $total + $this->pages_model->consulta_preco_atividades($curso)->preco;
//				}
//			}
//			if($concursos != null){
//				foreach ($concursos as $concurso){
//					$total = $total + $this->pages_model->consulta_preco_atividades($concurso)->preco;
//				}
//			}
		$dataUser = array(
			'cpf' => $cpf,
			'Nome' => $nome,
			'email' => $email,
			'Bairro' => $bairro,
			'Cidade' => $cidade,
			'sexo' => $sexo,
			'telefone' => $telefone
		);
		$dataBuy = array(
			'idCOMPRAS' => '',
			'cpf' => $cpf,
			'idVENDOR' => null,
		);



		if(!$this->pages_model->pesquisa_cliente($cpf)){
			$this->pages_model->insert_db_clientes($dataUser);
		}

		$this->pages_model->insert_db_compras($dataBuy);

		$pagseguro = array(
			'charset' => 'UTF-8',
			'token' => $id,
			'email' => 'vendas@congressoexpohair.com.br',
			'currency' => "BRL",
			/*'itemId1' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
            'itemQuantity1' => '1',
            'itemDescription1' => "Congresso ExpoHair Sobral 2019",
            'itemAmount1' => $novo,*/
			//'currecy' => "BRL",
			//'itemDescription1' => "Congresso ExpoHair Sobral 2019",
			'shippingAddressRequired' => 'false',
			'senderName' => $nome,
			'senderEmail' => $email,
			'senderCPF' => $cpf,
			'reference' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
			'redirectURL' => base_url(),
			'excludePaymentMethodGroup'=>'DEPOSIT',
			//'paymentMethodGroup1'=>'CREDIT_CARD',
			//'paymentMethodConfigKey1_1'=>'MAX_INSTALLMENTS_LIMIT',
			//'paymentMethodConfigValue1_1'=> '6'

		);


		for($j = $num1; $j>0; $j--){
			$this->criaIngresso($cpf, 101, $l1, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);
			$tok = $this->pagseguro_model->pesquisa_ultimoIngresso()->token;
			$pagseguro['itemId'.$i] = $tok;
			$pagseguro['itemDescription'.$i] = $this->pagseguro_model->pesquisa_ultimoShow($tok)->nome_show.' - PRIMEIRO LOTE - PROMOCIONAL';
			$pagseguro['itemQuantity'.$i] = $num1;
			$novo = sprintf($format, $this->pagseguro_model->pesquisa_ultimoLote($tok)->preco);
			$pagseguro['itemAmount'.$i] = $novo;
			$i++;
		}for($j = $num2; $j>0; $j--){
			$this->criaIngresso($cpf, 101, $l1, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);
			$tok = $this->pagseguro_model->pesquisa_ultimoIngresso()->token;
			$pagseguro['itemId'.$i] = $tok;
			$pagseguro['itemDescription'.$i] = $this->pagseguro_model->pesquisa_ultimoShow($tok)->nome_show.' - INTEIRA';
			$pagseguro['itemQuantity'.$i] = $num2;
			$novo = sprintf($format, 2*$this->pagseguro_model->pesquisa_ultimoLote($tok)->preco);
			$pagseguro['itemAmount'.$i] = $novo;
			$i++;
		}for($j = $num3; $j>0; $j--){
			$this->criaIngresso($cpf, 201, $l3, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);
			$tok = $this->pagseguro_model->pesquisa_ultimoIngresso()->token;
			$pagseguro['itemId'.$i] = $tok;
			$pagseguro['itemDescription'.$i] = $this->pagseguro_model->pesquisa_ultimoShow($tok)->nome_show.'  - PRIMEIRO LOTE - PROMOCIONAL';
			$pagseguro['itemQuantity'.$i] = $num3;
			$novo = sprintf($format, $this->pagseguro_model->pesquisa_ultimoLote($tok)->preco);
			$pagseguro['itemAmount'.$i] = $novo;
			$i++;
		}for($j = $num4; $j>0; $j--){
			$this->criaIngresso($cpf, 201, $l3, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);
			$tok = $this->pagseguro_model->pesquisa_ultimoIngresso()->token;
			$pagseguro['itemId'.$i] = $tok;
			$pagseguro['itemDescription'.$i] = $this->pagseguro_model->pesquisa_ultimoShow($tok)->nome_show.' - INTEIRA';
			$pagseguro['itemQuantity'.$i] = $num4;
			$novo = sprintf($format, 2*$this->pagseguro_model->pesquisa_ultimoLote($tok)->preco);
			$pagseguro['itemAmount'.$i] = $novo;
			$i++;
		}for($j = $num5; $j>0; $j--){
			$this->criaIngresso($cpf, 301, $l5, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);
			$tok = $this->pagseguro_model->pesquisa_ultimoIngresso()->token;
			$pagseguro['itemId'.$i] = $tok;
			$pagseguro['itemDescription'.$i] = $this->pagseguro_model->pesquisa_ultimoShow($tok)->nome_show.'- PRIMEIRO LOTE - PROMOCIONAL\'';
			$pagseguro['itemQuantity'.$i] = $num5;
			$novo = sprintf($format, $this->pagseguro_model->pesquisa_ultimoLote($tok)->preco);
			$pagseguro['itemAmount'.$i] = $novo;
			$i++;
		}for($j = $num6; $j>0; $j--){
			$this->criaIngresso($cpf, 301, $l5, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);
			$tok = $this->pagseguro_model->pesquisa_ultimoIngresso()->token;
			$pagseguro['itemId'.$i] = $tok;
			$pagseguro['itemDescription'.$i] = $this->pagseguro_model->pesquisa_ultimoShow($tok)->nome_show.' - INTEIRA';
			$pagseguro['itemQuantity'.$i] = $num6;
			$novo = sprintf($format, 2*$this->pagseguro_model->pesquisa_ultimoLote($tok)->preco);
			$pagseguro['itemAmount'.$i] = $novo;
			$i++;
		}for($j = $num7; $j>0; $j--){
			for($k = $num7; $k>0; $k--){
				$this->criaIngresso($cpf, 101, $l7, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);

			}for($k = $num7; $k>0; $k--){
				$this->criaIngresso($cpf, 201, $l7, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);

			}for($k = $num7; $k>0; $k--){
				$this->criaIngresso($cpf, 301, $l7, $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS);
			}
			$tok = $this->pagseguro_model->pesquisa_ultimoIngresso()->token;
			$pagseguro['itemId'.$i] = $tok;
			$pagseguro['itemDescription'.$i] = "COMBO - TODOS OS DIAS DE SHOW - PROMOCAO";
			$pagseguro['itemQuantity'.$i] = $num7;
			$novo = sprintf($format, $this->pagseguro_model->pesquisa_ultimoLote($tok)->preco);
			$pagseguro['itemAmount'.$i] = $novo;
			$i++;

		}

//			$dataTicket1 = array(
//				'cpf' => $cpf,
//				'lote' => $free,
//				'idSHOWS' => 1,
//				'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS
//			);
//			$dataTicket2 = array(
//				'token' => $token2,
//				'data_emissao' => $tempo_atual,
//				'data_utilizacao' => null,
//				'cpf' => $cpf,
//				'lote' => $free,
//				'idSHOWS' => 1,
//				'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS
//
//			);
//			$dataTicket3 = array(
//				'token' => $token3,
//				'data_emissao' => $tempo_atual,
//				'data_utilizacao' => null,
//				'cpf' => $cpf,
//				'lote' => $free,
//				'idSHOWS' => 1,
//				'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS
//
//			);

		/*if($combos != null){
			$atvs = $this->pages_model->pesquisa_atv_combo($combo);
			foreach ($combos as $combo){
				foreach ($atvs as $atv){
					$data_insc = array(
						'idATIVIDADE' => $atv->idATIVIDADE,
						'cpf' => $cpf,
						'data_inscricao' =>$tempo_atual,
						'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS,
						'idCOMBOS' => $combo
					);
					if(!$this->pages_model->verifica_cliente_atv($cpf, $atv->idATIVIDADE)){
						$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);
					}
				}
			}
			$this->pages_model->insert_db_ingresso($dataTicket1);
			$this->pages_model->insert_db_ingresso($dataTicket2);
			$this->pages_model->insert_db_ingresso($dataTicket3);
		}

		if($workshops != null){
			foreach ($workshops as $atv){
				$data_insc = array(
					'idATIVIDADE' => $atv,
					'cpf' => $cpf,
					'data_inscricao' =>$tempo_atual,
					'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS,
					'idCOMBOS' => null
				);
				if(!$this->pages_model->verifica_cliente_atv($cpf, $atv)){
					$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);
				}
			}
		}

		if($cursos != null){
			foreach ($cursos as $atv){
				$data_insc = array(
					'idATIVIDADE' => $atv,
					'cpf' => $cpf,
					'data_inscricao' =>$tempo_atual,
					'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS,
					'idCOMBOS' => null
				);
				if(!$this->pages_model->verifica_cliente_atv($cpf, $atv)){
					$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);
				}
			}
		}

		if($concursos != null){
			foreach ($concursos as $atv){
				$data_insc = array(
					'idATIVIDADE' => $atv,
					'cpf' => $cpf,
					'data_inscricao' =>$tempo_atual,
					'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS,
					'idCOMBOS' => null
				);
				if(!$this->pages_model->verifica_cliente_atv($cpf, $atv)){
					$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);
				}
			}
		}*/

		/*$context = stream_context_create(array(
            'http' => array(
                'method'  => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded",
                'content' => $pagseguro,
            )
        ));*/

        //$doc = file_get_contents('https://ws.pagseguro.uol.com.br/v2/checkout', null, $context);
		$pagseguro = http_build_query($pagseguro);
		//echo $pagseguro;
		$curl = curl_init($urlcheck);

		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $pagseguro);

		$xml= curl_exec($curl);

		curl_close($curl);

		//echo $xml;
		$xml = simplexml_load_string($xml);
		$tokie = $xml -> code;

		redirect($urltransaction.$tokie);

		//$this->teste($xml);
	}

}
