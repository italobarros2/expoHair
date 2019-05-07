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
		}

		public function index(){
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/home');
			$this->load->view('templates/footer');
		}

		public function inscricao(){
			$data = array(
				'combos' => $this->pages_model->pesquisa_combos(),
				'cursos' => $this->pages_model->pesquisa_cursos(),
				'workshops' => $this->pages_model->pesquisa_workshops(),
				'concursos' => $this->pages_model->pesquisa_concursos(),

			);
			$this->load->view('templates/header');
			$this->load->view('templates/nav-market');
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
	    public function planta(){
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/mapa');
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
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/ingresso');
			$this->load->view('templates/footer');
		}
	   public function checkout(){
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/checkout');
			$this->load->view('templates/footer');
		}

		public function teste($data = null){
			$datestring = '%Y%m%d%H%i%s';
			$time = now("America/Fortaleza");
			$date = array(
				'time' => mdate($datestring, $time),
				'code' => $data
			);
			$this->load->view('pages/teste-submit', $date);
		}

		/*
				'combos' => $combos,
				'concursos' => $concursos,
				'cursos' => $cursos,
				'workshops' => $workshops
		*/

		public function pagSeguro($data){

		}

		public function submitCongress(){
			$nome = $this->input->post('nome');
			$email = $this->input->post('email');
			$cpf = $this->input->post('cpf');
			$sexo = $this->input->post('sexo');
			$cidade = $this->input->post('cidade');
			$bairro = $this->input->post('bairro');
			$telefone = $this->input->post('telefone');
			$combos = $this->input->post('combos_select');
			$workshops = $this->input->post('workshops_select');
			$cursos = $this->input->post('cursos_select');
			$concursos = $this->input->post('concursos_select');
			$token1 = 0;
			$token2 = 0;
			$token3 = 0;
			$datestring = '%Y%m%d%H%i%s';
			$time = now("America/Fortaleza");
			$tempo_atual = mdate($datestring,$time);
			$total = 0;
			$free = 2;

			if($combos != null){
				foreach ($combos as $combo){
					$total = $total + $this->pages_model->consulta_preco_combos($combo)->preco;
				}
				$free = 100;
				$token1 = SHA1(rand());
				$token2 = SHA1(rand());;
				$token3 = SHA1(rand());;
			}/*Faço ou não checagem*/
			if($workshops != null){
				foreach ($workshops as $workshop){
					$total = $total + $this->pages_model->consulta_preco_atividades($workshop)->preco;
				}
			}
			if($cursos != null){
				foreach ($cursos as $curso){
					$total = $total + $this->pages_model->consulta_preco_atividades($curso)->preco;
				}
			}
			if($concursos != null){
				foreach ($concursos as $concurso){
					$total = $total + $this->pages_model->consulta_preco_atividades($concurso)->preco;
				}
			}
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
				'data_compra' => $tempo_atual,
				'validacao' => 'analise',
				'tipoPagamento' => 'cartaoDebito',
				'idVENDOR' => null,
				'total' => $total
			);



			if(!$this->pages_model->pesquisa_cliente($cpf)){
				$this->pages_model->insert_db_clientes($dataUser);
			}

			$this->pages_model->insert_db_compras($dataBuy);

			$dataTicket1 = array(
				'token' => $token1,
				'data_emissao' => $tempo_atual,
				'data_utilizacao' => null,
				'cpf' => $cpf,
				'lote' => $free,
				'idSHOWS' => 1,
				'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS
			);
			$dataTicket2 = array(
				'token' => $token2,
				'data_emissao' => $tempo_atual,
				'data_utilizacao' => null,
				'cpf' => $cpf,
				'lote' => $free,
				'idSHOWS' => 1,
				'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS

			);
			$dataTicket3 = array(
				'token' => $token3,
				'data_emissao' => $tempo_atual,
				'data_utilizacao' => null,
				'cpf' => $cpf,
				'lote' => $free,
				'idSHOWS' => 1,
				'idCOMPRAS' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS

			);

			if($combos != null){
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
			}
			$format = "%d.00";
			$novo = sprintf($format, $total);

			$pagseguro = http_build_query(array(

				'token' => "4108EBCEF6A34AEAAB72579116A5DCC0",
				'email' => 'italoctb@gmail.com',
				'currency' => "BRL",
				'itemId1' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS,
				'itemQuantity1' => '1',
				'itemDescription1' => "Congresso ExpoHair Sobral 2019",
				'itemAmount1' => $novo,
				'currecy' => "BRL",
				'itemDescription1' => "Congresso ExpoHair Sobral 2019",
				'shippingAddressRequired' => 'false',
				'senderName' => $nome,
				'senderEmail' => $email,
				'senderCPF' => $cpf,
				'reference' => $this->pages_model->pesquisaIdCompras($cpf, $tempo_atual)->idCOMPRAS,
				'redirectURL' => base_url(),
				'excludePaymentMethodGroup'=>'DEPOSIT',
				'paymentMethodGroup1'=>'CREDIT_CARD',
				'paymentMethodConfigKey1_1'=>'MAX_INSTALLMENTS_LIMIT',
				'paymentMethodConfigValue1_1'=> '1'


			));

			/*$context = stream_context_create(array(
				'http' => array(
					'method'  => 'POST',
					'header' => "Content-Type: application/x-www-form-urlencoded",
					'content' => $pagseguro,
				)
			));

			$doc = file_get_contents('https://ws.pagseguro.uol.com.br/v2/checkout', null, $context);
			*/

			$curl = curl_init('https://ws.sandbox.pagseguro.uol.com.br/v2/checkout');

			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $pagseguro);

			$xml= curl_exec($curl);

			curl_close($curl);

			$doc = simplexml_load_string($xml);
			$tokie = $doc -> code;
			redirect('https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code='.$tokie);

			//$this->teste($xml);
		}
}
