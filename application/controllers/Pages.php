<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('pages_model');
		$this->load->helper('date');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');

		$this->load->library('email');

	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}

	public function enviaEmail($email = 'italoctb@gmail.com', $informacoes = null, $token){ //$titular, $dataEvento, $nomeEvento, $preco, $lote, $dataCompra, idIngresso){

		$config = array(
			'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
			'smtp_host' => 'congressoexpohair.com.br',
			'smtp_port' => 465,
			'smtp_user' => 'vendas@congressoexpohair.com.br',
			'smtp_pass' => 'ExpOhAIr123',
			'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			'mailtype' => 'html', //plaintext 'text' mails or 'html'

		);

		$this->email->initialize($config);

		$this->email->from($config['smtp_user'], 'Congresso ExpoHair 2019 - Sobral');
		$this->email->to($email);
		$this->email->cc('italobarroscontato@gmail.com');
		$this->email->subject('Formulário de compra de Stand(s) - #'.$token);
		$this->email->message($informacoes);
		if ($this->email->send()) {
			echo '<h3>Compra de Stand(s) realizada com sucesso, em breve você receberá um e-mail de confirmação. (2 dias úteis, após a confimação do pagamento)</h3>';
			echo '<a href="'.base_url().'"><button>Voltar</button></a>';
		} else {
			show_error($this->email->print_debugger());
		}

	}

	public function pag(){
		$this->load->view('tests/test_pag');
	}
	public function inscricao(){
		$data = array(
			'combos' => $this->pages_model->pesquisa_combos(),
			'cursos' => $this->pages_model->pesquisa_cursos(),
			'workshops' => $this->pages_model->pesquisa_workshops(),
			'concursos' => $this->pages_model->pesquisa_concursos(),

		);
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/inscricao-congress', $data);
		$this->load->view('templates/footer');
	}

	public function inscricaoVendor(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav-market');
		$this->load->view('pages/inscricao-congress-v');
		$this->load->view('templates/footer');
	}

	public function workshop(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/work');
		$this->load->view('templates/footer');
	}

	public function confirmaLogin($cpf){
		$token = sha1($cpf);
		redirect(base_url('ingressos/usuario/'.$token));
	}

	public function confirmaLogin_stp2($token){
		$data = array(

			'tokien' => $token

		);
		$this->load->view('pages/confirmaLogin', $data);
	}

	public function ingressosDisponiveis(){
		$cpf = str_replace(array('.', '-'), '', $this->input->post('cpf'));
		$token_cpf = sha1($cpf);
		$token = $this->input->post('token');
		if($token_cpf == $token){
			$queries = $this->pages_model->pesquisa_ingresso_cliente($cpf);
			$data = array('queries'=>$queries);
			$this->load->view('pages/user_ingressos', $data);
		}else{
			redirect(base_url('ingressos/usuario/'.$token));
		}
	}

	public function processaPlanta(){

		$flag = true;   //TRUE = Real; FALSE = SANDBOX

		if ($flag) {
			$urlcheck = 'https://ws.pagseguro.uol.com.br/v2/checkout';
			$urltransaction = 'https://pagseguro.uol.com.br/v2/checkout/payment.html?code=';
			$id = 'ae50af72-db75-4b99-a2dd-dbde8e6e23323e76e1eb4391a482913211f770c15967301b-add2-451d-b266-0bd5925d5b3a';
//				$id = 'edb6f6de-3125-401c-a1cf-664af789e6c7e9dc25cc459293ba57a61ee7cab448c08673-200c-4642-a41f-fcfd8fd086fa';
		} else {
			$urlcheck = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
			$urltransaction = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=';
			$id = '7CB64880FFC74C969B2E7BC163B2A4BF';
		}


		$select = $this->input->post('optradio');
		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$cpf = str_replace(array('.', '-'), '', $this->input->post('cpf'));
		$telefone = $this->input->post('telefone');
		$cep = $this->input->post('cep');
		$cidade = $this->input->post('cidade');
		$bairro = $this->input->post('bairro');
		$endereco = $this->input->post('endereco');
		$numero = $this->input->post('numero');
		$complemento = $this->input->post('complemento');
		$razao = $this->input->post('razao');
		$nomef = $this->input->post('nomef');
		$cnpj = $this->input->post('cnpj');
		$telefoneEmp = $this->input->post('telefoneEmp');
		$cep_emp = $this->input->post('cep_emp');
		$cidade_emp = $this->input->post('cidade_emp');
		$bairro_emp = $this->input->post('bairro_emp');
		$endereco_emp = $this->input->post('endereco_emp');
		$numero_emp = $this->input->post('numero_emp');
		$complemento_emp = $this->input->post('complemento_emp');
		$stands = $this->input->post('name_stands');
		$qtd_stands = $this->input->post('qtd_stands');
		$tipo_stand = $this->input->post('tipo_stand');
		$valor_stand = $this->input->post('total');

		$unique_stands = array();
		$temp = $stands;
		$format = "%d.00";

		for($i = 0; $i < $qtd_stands; $i++){
			if($i == $qtd_stands - 1){
				$unique_stands[$i] = $temp;
			}else{
				$unique_stands[$i] = strstr($temp, ', ', true);
				$temp = strstr($temp, ', ', false);
				$temp = substr($temp, 2);
			}
		}



		$data = array(

			'nome_rep' => $nome,
			'email' => $email,
			'cpf' => $cpf,
			'telefone_rep' => $telefone,
			'cep_rep' => $cep,
			'numero_rep' => $numero,
			'complemento_rep' => $complemento,
			'razao' => $razao,
			'nome_fant' => $nomef,
			'cnpj' => $cnpj,
			'telefone_emp' => $telefoneEmp,
			'cep_emp' => $cep_emp,
			'numero_emp' => $numero_emp,
			'complemento_emp' => $complemento_emp

		);

		$data_buy = array(

			'idCOMPRAS' => '',
			'cpf' => $cpf,
			'idVENDOR' => null,
			'flag_congresso' => 2

		);

		$processa = 111111;

		$flag_processa = true;

		while ($flag_processa){
			if(!$this->pages_model->pesquisa_PROCESSA($processa)){
				$data_buy['id_PROCESSAMENTO'] = $processa;
				$flag_processa = false;
			}else{
				$processa++;
			}
		}

		if(!$this->pages_model->pesquisa_Representante($cpf)){
			$this->pages_model->insertRepresentante($data);
		}

		$this->pages_model->insert_db_compras($data_buy);



		if ($tipo_stand == 0){
			$monta_montagem = 'Área Livre.';
			$const = 1000;
		}

		if ($tipo_stand == 1){
			$monta_montagem = 'Com montagem básica.';
			$const = 2000;
		}

		$this->pages_model->update_stands($unique_stands, $processa);

		$mensagem = '
					
							<h1>Novo formulário de Compra de Stand</h1>
							<h2>Dados do Representante</h2>
							<h3><b>Nome do representante: </b>'.$nome.'</h3>
							<h3><b>Email do representante: </b>'.$email.'</h3>
							<h3><b>CPF do representante: </b>'.$cpf.'</h3>
							<h3><b>Telefone do representante: </b>'.$telefone.'</h3>
							<h3><b>CEP do representante: </b>'.$cep.'</h3>
							<h3><b>Cidade do representante: </b>'.$cidade.'</h3>
							<h3><b>Bairro do representante: </b>'.$bairro.'</h3>
							<h3><b>Endereço do representante: </b>'.$endereco.'</h3>
							<h3><b>Número do representante: </b>'.$numero.'</h3>
							<h3><b>Complemento do representante: </b>'.$complemento.'</h3>
							<h3><b>Nome do representante: </b>'.$nome.'</h3>
							<h2>Dados do Negócio</h2>
							<h3><b>Razão Social: </b>'.$razao.'</h3>
							<h3><b>Nome Fantasia: </b>'.$nomef.'</h3>
							<h3><b>CNPJ: </b>'.$cnpj.'</h3>
							<h3><b>Telefone Empresarial: </b>'.$telefoneEmp.'</h3>
							<h3><b>CEP Empresarial: </b>'.$cep_emp.'</h3>
							<h3><b>Cidade Empresarial: </b>'.$cidade_emp.'</h3>
							<h3><b>Bairro Empresarial: </b>'.$bairro_emp.'</h3>
							<h3><b>Endereço Empresarial: </b>'.$endereco_emp.'</h3>
							<h3><b>Número Empresarial: </b>'.$numero_emp.'</h3>
							<h3><b>Complemento Empresarial: </b>'.$complemento_emp.'</h3>
							<h2>Dados do(s) Stand(s)</h2>
							<h3><b>Stand(s) selecionado(s): </b>'.$stands.'</h3>
							<h3><b>Tipo de montagem: </b>'.$monta_montagem.'</h3>
							<h3><b>Total: </b>R$'.$valor_stand.'.00</h3>
							
				';


		if($select == 0){


			$dados_recebidos = array(

				'idSTATUS' => 2,
				'id_PROCESSAMENTO' => $processa,
				'idNOTIFICA' => null,
				'valor_compra' => $valor_stand,
				'tipoPagamento' => 100,
				'origemCancel' => null,
				'lastEvent' =>  mdate('%d/%m/%Y', now('America/Fortaleza')),
				'dataCompra' => mdate('%d/%m/%Y', now('America/Fortaleza')),

			);

			$this->pages_model->insertNotification($dados_recebidos);
			$this->enviaEmail('hm.comercial.exhibitions@gmail.com', $mensagem, $processa);

		}else{
			$pagseguro = array(
				'charset' => 'UTF-8',
				'token' => $id,
				'email' => 'vendas@congressoexpohair.com.br',
				'currency' => "BRL",
				'shippingAddressRequired' => 'false',
				'senderName' => $nome,
				'senderEmail' => $email,
				'senderCPF' => $cpf,
				'reference' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
				'redirectURL' => base_url(),
				'excludePaymentMethodGroup'=>'DEPOSIT',
			);

			$iterator = 1;
			foreach ($unique_stands as $unique_stand){
				$pagseguro['itemId'.$iterator] = $unique_stand;
				$pagseguro['itemDescription'.$iterator] = 'STAND - n.'.$unique_stand;
				$pagseguro['itemQuantity'.$iterator] = 1;
				$novo = sprintf($format, $const*$this->pages_model->pesquisaStands($unique_stand)->standAREA);
				$pagseguro['itemAmount'.$iterator] = $novo;
				$iterator++;
			}

			$pagseguro = http_build_query($pagseguro);
//			echo $pagseguro;
			$curl = curl_init($urlcheck);

			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $pagseguro);

			$xml= curl_exec($curl);

			curl_close($curl);
//			echo $xml;
			$xml = simplexml_load_string($xml);
			$tokie = $xml -> code;

			redirect($urltransaction.$tokie);


		}
	}

	public function planta(){

		$stands = $this->pages_model->pesquisaStands();

		$data = array(

			'stands' => $stands

		);

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/mapa', $data);
		$this->load->view('templates/footer');
	}
	public function noiva(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/noivas');
		$this->load->view('templates/footer');
	}
	public function barber(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/barbeiro');
		$this->load->view('templates/footer');
	}
	public function info(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/sobre');
		$this->load->view('templates/footer');
	}
	public function humor(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/humor');
		$this->load->view('templates/footer');
	}
	public function insc(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/inscricao');
		$this->load->view('templates/footer');
	}
	public function ingresso(){


		$shows = $this->pages_model->pesquisa_shows();
		$lote1 = $this->pages_model->pesquisa_lotes('1', '1');
		$lote2 = $this->pages_model->pesquisa_lotes('1', '2');
		$lote3 = $this->pages_model->pesquisa_lotes('1', '3');
		$lote4 = $this->pages_model->pesquisa_lotes('1', '003');

		$data = array (

			'shows' => $shows,
			'lote1' => $lote1,
			'lote2' => $lote2,
			'lote3' => $lote3,
			'lote4' => $lote4,

		);
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/ingresso', $data);
		$this->load->view('templates/footer');
	}
	public function checkout(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/checkout');
		$this->load->view('templates/footer');
	}
	public function show(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/show');
		$this->load->view('templates/footer');
	}
	public function cursos(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/cursos');
		$this->load->view('templates/footer');
	}
	public function comercial(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/comercial');
		$this->load->view('templates/footer');
	}


	public function teste($data = null){
		$mensagem = '

			<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>

        body{
            background-color: #e3d7e1;
            height: auto;
            padding-bottom: 50px;
        }
        .card{
            background-color: white;
            margin: auto;
            margin-top: 50px;
            height: auto;
            width: 815px;
            padding-top: 40px;
            border-style: ridge;
            border-width: 3px;
            padding-bottom: 40px;

        }
        .sec-logo{
            text-align: center;
            margin-bottom: 10px;
        }

        .sec-body{
            padding-top: 50px;
            padding-left: 50px;
            padding-right: 50px;
            font-family: Helvetica;
            font-size: 18px;
            text-align: justify;
            color: #484848;
            line-height: 30px;
        }

        .sec-body ul li{
            margin-bottom: 5px;
        }

        .sec-standard{
            background-color: #ae2185;
            /*background-color: #1e1e1e;*/
            /*background-color: ;*/
            /*border-style: solid;*/
            /*border: #ae2185;;*/
            padding-top: 20px;
            padding-bottom: 20px;
            color: white;
            text-align: center;
        }

        .sec-btn{
            font-family: Helvetica;
            font-size: 18px;
            text-align: justify;
            color: #484848;
            line-height: 30px;
            text-align: center;
        }

        .sec-btn a button{
            margin-top: 35px;
            margin-bottom: 35px;
            display: inline-block;
            text-align: center;
            font-size: 16px;
            color: #fff;
            padding: 12px 30px;
            min-width: 145px;
            border: 2px solid #ae2185;
            background: #ae2185;
            cursor: pointer;
        }

        .sec-btn p a{
            color: #484848;
        }

        .sec-btn a{
            color: #484848;
        }

        .sec-btn p a:link{
            text-decoration: none;
        }.sec-btn p a:visited{
             text-decoration: none;
         }.sec-btn p a:hover{
              text-decoration: underline;
          }.sec-btn p a:active{
               text-decoration: underline;
           }

        .sec-btn a:link{
            text-decoration: none;
        }.sec-btn a:visited{
             text-decoration: none;
         }.sec-btn a:hover{
              text-decoration: underline;
          }.sec-btn a:active{
               text-decoration: none;
           }

        .sec-body ul{
            list-style-image: url("https://www.congressoexpohair.com.br/static/img/point-pink.png");
        }

        .sec-btn a ul li{
            display: inline-block;
        }



        @media only screen and (min-height: 800px){
            #resp_logo{
                height: 150px;
            }
            #resp_link{
                height: 60px;
            }
            label{
                bottom: 18px !important;
            }

            .sec-btn a button{
                margin-top: 35px;
                margin-bottom: 35px;
                display: inline-block;
                text-align: center;
                font-size: 25px;
                color: #fff;
                padding: 30px 80px;
                min-width: 145px;
                border: 2px solid #ae2185;
                background: #ae2185;
                cursor: pointer;
            }

            .sec-body ul{
                list-style-image: url("https://www.congressoexpohair.com.br/static/img/point-pinkG.png") !important;
            }

        

    </style>
</head>

<body>
<div class="card">

    <section class="sec-logo">

        <img id="resp_logo" src="https://www.congressoexpohair.com.br/static/img/logo_b.png" height="92px" alt="Congresso ExpoHair - Sobral">

    </section>

    <section class="sec-standard">

        <h1 style="font-family: Helvetica;">Seus ingressos para shows ExpoHair estão disponíveis!</h1>

    </section>

    <section class="sec-body">

        <p>Olá, Fulano.<p>
        <p>Estamos muito contentes com sua aquisição, e para garantirmos que sua experiência seja a melhor de todas, é importante ficar atento com alguns avisos:</p>
        <ul>
            <li>Por questões de segurança, não repasse esse e-mail a ninguém.</li>
            <li>Cada ingresso só poderá ser usado apenas uma vez.</li>
            <li>A apresentação do ingresso <b>pode</b> ser feita através do ingresso impresso ou a apresentação de algum dispositivo móvel (Celulares, Tablets, etc) com a imagem do ingresso.</li>
            <li>Divirta-se!</li>
        </ul>


    </section>

    <section class="sec-btn">

        <p style="text-align: center"><b>Clique no botão para ter acesso ao(s) seu(s) ingresso(s)</b></p>

        <a href="https://www.congressoexpohair.com.br/ingressos/"><button>Clique aqui!</button></a>

        <p><a href="https://www.congressoexpohair.com.br/">https://www.congressoexpohair.com.br/</a></p>
        <a href=""></a>

        <a href="https://www.instagram.com/congressoefeiraexpohair_/"><img id="resp_link" src="https://www.congressoexpohair.com.br/static/img/Instagram_icone.png" height="30px" alt="" style="margin-bottom: -8px"><label style="position: relative; bottom: 8px; margin-left: 5px; font-weight: bold">@congressoefeiraexpohair_</label></a>

    </section>

</div>


</body>

</html>


		';

		$this->enviaEmail('italoctb@gmail.com', $mensagem);

//		echo sha1('06532114308');
//		echo sha1('3129468#06532114308');
	}

	/*
            'combos' => $combos,
            'concursos' => $concursos,
            'cursos' => $cursos,
            'workshops' => $workshops
    */

//	public function pagSeguro($data){
//
//	}

	public function criaPlanta(){
		$max = 169;
		$area = 12;
		for($i = 167; $i<=$max; $i++){
			$this->pages_model->criaPlanta($i, $area, null);
		}
	}

	public function submitCongress()
	{

		$flag = true;   //TRUE = Real; FALSE = SANDBOX

		if ($flag) {
			$urlcheck = 'https://ws.pagseguro.uol.com.br/v2/checkout';
			$urltransaction = 'https://pagseguro.uol.com.br/v2/checkout/payment.html?code=';
			$id = 'ae50af72-db75-4b99-a2dd-dbde8e6e23323e76e1eb4391a482913211f770c15967301b-add2-451d-b266-0bd5925d5b3a';
//				$id = 'edb6f6de-3125-401c-a1cf-664af789e6c7e9dc25cc459293ba57a61ee7cab448c08673-200c-4642-a41f-fcfd8fd086fa';
		} else {
			$urlcheck = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
			$urltransaction = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=';
			$id = '7CB64880FFC74C969B2E7BC163B2A4BF';
		}


		$nome = $this->input->post('nome');
		$email = $this->input->post('email');
		$cpf = str_replace(array('.', '-'), '', $this->input->post('cpf'));
		$idVendor = $this->input->post('idvendor');
		$sexo = $this->input->post('sexo');
		$cidade = $this->input->post('cidade');
		$bairro = $this->input->post('bairro');
		$telefone = $this->input->post('telefone');
		$combos = $this->input->post('combos_select');
		$workshops = $this->input->post('workshops_select');
		$cursos = $this->input->post('cursos_select');
		$concursos = $this->input->post('concursos_select');
		//$token1 = rand();
		//$token2 = rand();
		//$token3 = rand();
//			$total = 0;
		$i = 1;
		$format = "%d.00";
//			$free = '3121996';
//
//			if($combos != null){
//				foreach ($combos as $combo){
//					$total = $total + $this->pages_model->consulta_preco_combos($combo)->preco;
//				}
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
			'idVENDOR' => $idVendor,
			'flag_congresso' => 1
		);


		if (!$dataBuy['idVENDOR']){
			$dataBuy['idVENDOR'] = null;
		}



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

		if($combos != null){

			foreach ($combos as $combo){
				$atvs = $this->pages_model->pesquisa_atv_combo($combo);
				foreach ($atvs as $atv){

					$data_insc = array(
						'idATIVIDADE' => $atv->idATIVIDADE,
						'cpf' => $cpf,
						'idCOMPRAS' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
						'idCOMBOS' => $combo
					);

					$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);

				}
				$pagseguro['itemId'.$i] = $this->pages_model->pesquisa_combos($combo)->idCOMBOS;
				$pagseguro['itemDescription'.$i] = $this->pages_model->pesquisa_combos($combo)->nome;
				$pagseguro['itemQuantity'.$i] = 1;
				$novo = sprintf($format, $this->pages_model->pesquisa_combos($combo)->preco);
				$pagseguro['itemAmount'.$i] = $novo;
				$i++;
			}
		}

		if($workshops != null){ //MUDAR FUNC DE PROCURA CONCURSO
			foreach ($workshops as $atv){
				$data_insc = array(
					'idATIVIDADE' => $atv,
					'cpf' => $cpf,
					'idCOMPRAS' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
					'idCOMBOS' => null
				);
				$pagseguro['itemId'.$i] = $this->pages_model->pesquisa_atividades_general($atv)->idATIVIDADE;
				$pagseguro['itemDescription'.$i] = $this->pages_model->pesquisa_atividades_general($atv)->nomeATIVIDADE;
				$pagseguro['itemQuantity'.$i] = 1;
				$novo = sprintf($format, $this->pages_model->pesquisa_atividades_general($atv)->preco);
				$pagseguro['itemAmount'.$i] = $novo;
				$i++;

				$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);

			}
		}

		if($cursos != null){
			foreach ($cursos as $atv){
				$data_insc = array(
					'idATIVIDADE' => $atv,
					'cpf' => $cpf,
					'idCOMPRAS' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
					'idCOMBOS' => null
				);
				$pagseguro['itemId'.$i] = $this->pages_model->pesquisa_atividades_general($atv)->idATIVIDADE;
				$pagseguro['itemDescription'.$i] = $this->pages_model->pesquisa_atividades_general($atv)->nomeATIVIDADE;
				$pagseguro['itemQuantity'.$i] = 1;
				$novo = sprintf($format, $this->pages_model->pesquisa_atividades_general($atv)->preco);
				$pagseguro['itemAmount'.$i] = $novo;
				$i++;

				$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);

			}
		}

		if($concursos != null){
			foreach ($concursos as $atv){
				$data_insc = array(
					'idATIVIDADE' => $atv,
					'cpf' => $cpf,
					'idCOMPRAS' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
					'idCOMBOS' => null
				);

				$this->pages_model->insert_db_atividades_has_clientes_has_compras($data_insc);

				$pagseguro['itemId'.$i] = $this->pages_model->pesquisa_atividades_general($atv)->idATIVIDADE;
				$pagseguro['itemDescription'.$i] = $this->pages_model->pesquisa_atividades_general($atv)->nomeATIVIDADE;
				$pagseguro['itemQuantity'.$i] = 1;
				$novo = sprintf($format, $this->pages_model->pesquisa_atividades_general($atv)->preco);
				$pagseguro['itemAmount'.$i] = $novo;
				$i++;
			}
		}
		$format = "%d.00";
		//$novo = sprintf($format, $total);

//			$pagseguro = array(
//				'charset' => 'UTF-8',
//				'token' => $id,
//				'email' => 'italoctb@gmail.com',
//				'currency' => "BRL",
//				/*'itemId1' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
//				'itemQuantity1' => '1',
//				'itemDescription1' => "Congresso ExpoHair Sobral 2019",
//				'itemAmount1' => $novo,*/
//				//'currecy' => "BRL",
//				//'itemDescription1' => "Congresso ExpoHair Sobral 2019",
//				'shippingAddressRequired' => 'false',
//				'senderName' => $nome,
//				'senderEmail' => $email,
//				'senderCPF' => $cpf,
//				'reference' => $this->pages_model->pesquisa_ultimaCompra($cpf)->idCOMPRAS,
//				'redirectURL' => base_url(),
//				'excludePaymentMethodGroup'=>'DEPOSIT',
//				//'paymentMethodGroup1'=>'CREDIT_CARD',
//				//'paymentMethodConfigKey1_1'=>'MAX_INSTALLMENTS_LIMIT',
//				//'paymentMethodConfigValue1_1'=> '6'
//
//
//			);

		$pagseguro = http_build_query($pagseguro);

		//echo $pagseguro; echo "</br>";

		/*$context = stream_context_create(array(
            'http' => array(
                'method'  => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded",
                'content' => $pagseguro,
            )
        ));

        $doc = file_get_contents('https://ws.pagseguro.uol.com.br/v2/checkout', null, $context);
        */

		$curl = curl_init($urlcheck);

//			curl_setopt($curl, CURLOPT_ENCODING ,"UTF-8");
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $pagseguro);

		$xml= curl_exec($curl);

		curl_close($curl);

//			echo $xml;
		$xml = simplexml_load_string($xml);
		$tokie = $xml -> code;

		redirect($urltransaction.$tokie);

		//$this->teste($xml);
	}
}
