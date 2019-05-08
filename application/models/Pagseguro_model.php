<?php
class pagseguro_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function verificaNotification($data)
	{
		//$this->db->query('SELECT * FROM processamento_pagseguro WHERE idPROCESSAMENTO = '.$data);
		$this->db->get_where('processamento_pagseguro', array('idSTATUS' => $data));
	}

	public function insertNotification($data)
	{
		$this->db->insert('processamento_pagseguro', $data);
	}

	public function updateNotification($data)
	{
		$this->db->where('idPROCESSAMENTO', $data['idPROCESSAMENTO']);
		$this->db->set('idSTATUS', $data['idSTATUS']);
		$this->db->set('origemCancel', $data['origemCancel']);
		$this->db->set('lastEvent', $data['lastEvent']);
	}
}
