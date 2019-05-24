<?php
class pagseguro_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function verificaNotification($data)
	{
		$query = $this->db->get_where('processamento_pagseguro', array('idPROCESSAMENTO' => $data));
		return $query->row();
		//$this->db->get_where('processamento_pagseguro', array('idSTATUS' => $data));
	}

	public function insertNotification($data)
	{
		$this->db->insert('processamento_pagseguro', $data);
	}

	public function pesquisaDadosCompras($idCOMPRAS){
		$query = $this->db->query('SELECT * FROM compras WHERE idCOMPRAS = '.$idCOMPRAS.';');
		return $query->row();
	}

	public function setDadoCompra($reference, $idPROCESSAMENTO)
	{

		$query = $this->db->query('SELECT * FROM atividades_has_clientes_has_compras WHERE idCOMPRAS = '.$reference.';');
		$datas = $query->result();

		foreach ($datas as $data){
			$this->db->delete('atividades_has_clientes_has_compras', array('idCOMPRAS' => $reference));
		}

		$dados = array(

			'idCOMPRAS' => $reference,
			'cpf' => $this->db->query('SELECT * FROM compras WHERE idCOMPRAS = '.$reference.';')->row()->cpf,
			'idVENDOR' => $this->db->query('SELECT * FROM compras WHERE idCOMPRAS = '.$reference.';')->row()->idVENDOR,
			'id_PROCESSAMENTO' => $idPROCESSAMENTO

		);

		$this->db->replace('compras',$dados);

		foreach ($datas as $data){
			$this->db->insert('atividades_has_clientes_has_compras', $data);
		}
	}

	public function pesquisa_ultimaCompra($cpf)
	{
		$query = $this->db->query('SELECT MAX(idCOMPRAS) as idCOMPRAS FROM compras WHERE cpf = '.$cpf.' GROUP BY cpf;');
		return $query->row();
	}

	public function pesquisa_ultimoIngresso()
	{
		$query = $this->db->query('SELECT max(token) as token FROM ingresso NATURAL JOIN precos_show NATURAL JOIN shows WHERE 1 ORDER BY token DESC');
		return $query->row();
	}


	public function pesquisa_ultimoShow($token)
	{
		$querySec = $this->db->query("SELECT idSHOWS FROM ingresso WHERE token = $token")->row();
		$queryPrincipal = $this->db->query('SELECT * FROM shows WHERE idSHOWS = '.$querySec->idSHOWS);
		return $queryPrincipal->row();
	}



	public function pesquisa_ultimoLote($token)
	{
		$querySec = $this->db->query('SELECT * FROM precos_show NATURAL  JOIN ingresso WHERE token = '.$token);
		return $querySec->row();
	}

	public function updateNotification($data)
	{
		//$this->db->get_where('processamento_pagseguro', array('idPROCESSAMENTO'=>$data['idPROCESSAMENTO']));
		$this->db->replace('processamento_pagseguro', $data);
	}
}
