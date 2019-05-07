<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagseguro extends CI_Controller {

	public function teste_pag(){
		$this->load->view('test_pag');
	}



	public function trata_pag(){
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
		$parâmetros['itemAmount1'] = 1;*/

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


}
