<?php
class pages_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function pesquisa_atividades_general($id)
	{
		/*if ((($id >1100 && $id < 1200) || ($id >2100 && $id < 2200)) || ($id >3100 && $id < 3200)) {
			$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividade NATURAL JOIN precos_atividades WHERE ((idATIVIDADE >1100 AND idATIVIDADE < 1200) OR (idATIVIDADE >2100 AND idATIVIDADE < 2200)) OR (idATIVIDADE >3100 AND idATIVIDADE < 3200);');
			return $query->result();
		} elseif ((($id >1200 && $id < 1300) || ($id >2200 && $id < 2300)) || ($id >3200 && $id < 3300)) {
			$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividade NATURAL JOIN precos_atividades WHERE ((idATIVIDADE >1200 AND idATIVIDADE < 1300) OR (idATIVIDADE >2200 AND idATIVIDADE < 2300)) OR (idATIVIDADE >3200 AND idATIVIDADE < 3300);');
			return $query->result();
		} else {
			$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividade NATURAL JOIN precos_atividades WHERE ((idATIVIDADE >1300 AND idATIVIDADE < 1400) OR (idATIVIDADE >2300 AND idATIVIDADE < 2400)) OR (idATIVIDADE >3300 AND idATIVIDADE < 3400);');
			return $query->result();
		}*/
		$query = $this->db->query("SELECT * FROM atividades NATURAL JOIN precos_atividades WHERE idATIVIDADE = $id");
		return $query->row();


	}

	public function pesquisa_shows($id = null){
		if($id == null){
			$query = $this->db->query('SELECT * FROM shows');
			return $query->result();
		}
		$query = $this->db->query('SELECT * FROM shows WHERE idSHOWS = '.$id.';');
		return $query->result();

	}

	public function pesquisa_lotes($lote, $day){

		$query = $this->db->query('SELECT * FROM precos_show WHERE lote = '.$lote.$day.';');
		return $query->row();


	}

	public function pesquisa_ultimaCompra($cpf)
	{
		$query = $this->db->query('SELECT MAX(idCOMPRAS) as idCOMPRAS FROM compras WHERE cpf = '.$cpf.' GROUP BY cpf;');
		return $query->row();
	}

//	public function setDadoCompra($reference, $idPROCESSAMENTO)
//	{
//
//		$this->db->update('compras', array('id_PROCESSAMENTO'=>$idPROCESSAMENTO), "idCOMPRAS = $reference");
//	}

	public function pesquisa_publico_atividades($id)
	{
		$query = $this->db->query('SELECT Nome, email, telefone, cpf, Cidade, sexo, validacao FROM clientes NATURAL JOIN compras NATURAL JOIN atividades_has_clientes_has_compras NATURAL JOIN atividades WHERE idATIVIDADE =' . $id . ';');
		return $query->result();
	}

	public function numeroParticipantesPagantes($id)
	{
		$query = $this->db->query('SELECT COUNT(*) AS qtd FROM atividades NATURAL JOIN atividades_has_clientes_has_compras NATURAL JOIN compras WHERE idATIVIDADE =' . $id . ' AND validacao = "pago";');
		return $query->row();
	}

	public function constanteCurso($id)
	{
		$query = $this->db->query('SELECT preco FROM atividades NATURAL JOIN precos_atividades WHERE idATIVIDADE =' . $id . ';');
		return $query->row();
	}

	public function n_Part_tecHHub_curso($id)
	{
		$query = $this->db->query('SELECT COUNT(*) AS qtd FROM compras NATURAL JOIN atividades_has_clientes_has_compras WHERE tipoPagamento != "dinheiro" AND validacao = "pago" AND idATIVIDADE = ' . $id . ';');
		return $query->row();
	}

	public function pesquisa_cursos()
	{
		$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividades WHERE ((idATIVIDADE >1100 AND idATIVIDADE < 1200) OR (idATIVIDADE >2100 AND idATIVIDADE < 2200)) OR (idATIVIDADE >3100 AND idATIVIDADE < 3200);');
		return $query->result();
	}

	public function pesquisa_workshops()
	{
		$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividades WHERE ((idATIVIDADE >1200 AND idATIVIDADE < 1300) OR (idATIVIDADE >2200 AND idATIVIDADE < 2300)) OR (idATIVIDADE >3200 AND idATIVIDADE < 3300);');
		return $query->result();
	}

	public function pesquisa_concursos()
	{
		$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividades WHERE ((idATIVIDADE >1300 AND idATIVIDADE < 1400) OR (idATIVIDADE >2300 AND idATIVIDADE < 2400)) OR (idATIVIDADE >3300 AND idATIVIDADE < 3400);');
		return $query->result();
	}

	public function pesquisa_ultimoIngresso()
	{
		$query = $this->db->query('SELECT max(token) as token FROM ingresso NATURAL JOIN precos_show NATURAL JOIN shows WHERE 1 ORDER BY token DESC');
		return $query->row();
	}

	public function pesquisa_combos($id = null)
	{
		if($id == null){
			$query = $this->db->query('SELECT * FROM combos NATURAL JOIN precos_atividades;');
			return $query->result();
		}
		$query = $this->db->query("SELECT * FROM combos NATURAL JOIN precos_atividades WHERE idCOMBOS = $id");
		return $query->row();
	}

	public function pesquisa_ingresso_cliente($cpf){
		$query = $this->db->query('SELECT * FROM ingresso NATURAL JOIN clientes NATURAL JOIN shows NATURAL JOIN precos_show NATURAL JOIN compras NATURAL JOIN processamento_pagseguro WHERE cpf ='.$cpf.' AND (idSTATUS = 3 OR idSTATUS = 4);');
		return $query->result();
	}

	public function pesquisa_cliente($cpf){
		$query = $this->db->query('SELECT * FROM clientes WHERE cpf ='.$cpf.';');
		return $query->row();
	}

	public function pesquisa_Representante($cpf){
		$query = $this->db->query('SELECT * FROM representantes WHERE cpf ='.$cpf.';');
		return $query->row();
	}

	public function pesquisa_PROCESSA($id_PROCESSAMENTO){
		$query = $this->db->query('SELECT * FROM compras WHERE id_PROCESSAMENTO ='.$id_PROCESSAMENTO.';');
		return $query->row();
	}

	public function pesquisaIdCompras($idCOMPRAS){
		$query = $this->db->query("SELECT idCOMPRAS FROM compras WHERE idCOMPRAS = $idCOMPRAS;");
		return $query->row();
	}

	public function pesquisa_atv_combo($combo){
		$query = $this->db->query("SELECT idATIVIDADE FROM combo_has_atividades WHERE idCOMBOS = $combo;");
		return $query->result();
	}

	public function verifica_cliente_atv($cpf, $idATIVIDADE){
		$query = $this->db->query("SELECT * FROM atividades_has_clientes_has_compras NATURAL JOIN compras WHERE cpf = $cpf AND idATIVIDADE = $idATIVIDADE AND id_PROCESSAMENTO != null;");
		return $query->row();
	}

	public function insert_db_atividades($data)
	{
		$this->db->insert('atividades', $data);
	}

	public function insert_db_atividades_has_clientes_has_compras($data)
	{
		$this->db->insert('atividades_has_clientes_has_compras', $data);
	}

	public function insertNotification($data)
	{
		$this->db->insert('processamento_pagseguro', $data);
	}

	public function insert_db_clientes($data)
	{
		$this->db->insert('clientes', $data);
	}

	public function pesquisaStands($id = null)
	{
		if($id != null){
			$query = $this->db->get_where('stands', array('idSTANDS' => $id));
			return $query->row();
		}
		$query = $this->db->query('SELECT * FROM stands WHERE id_PROCESSAMENTO = 0');
		return $query->result();
	}

	public function pesquisaCategoria($id = null){
		if($id != null){
			$query = $this->db->query("SELECT * FROM categoria_barbeiros NATURAL JOIN precos_atividades WHERE idCATEGORIA = $id;");
			return $query->row();
		}
		$query = $this->db->query("SELECT * FROM categoria_barbeiros NATURAL JOIN precos_atividades;");
		foreach ($query->result() as $item){
			$num = $this->db->query("SELECT COUNT(idCATEGORIA) AS num FROM barbeiro_has_categoria WHERE idCATEGORIA = $item->idCATEGORIA");
			if($num->row()->num==10){
				$query = $this->db->query("SELECT * FROM categoria_barbeiros NATURAL JOIN precos_atividades WHERE idCATEGORIA != $item->idCATEGORIA;");
			}
		}
		return $query->result();
	}

	public function insertBarbeiro($data){
		$this->db->insert('barbeiro_has_categoria', $data);
	}



	public function verificaConvidado($cpf){
		$this->db->query("SELECT * FROM convidados WHERE cpf = $cpf");
	}

	public function insertConvidado($data){
		$this->db->insert('convidados', $data);
	}

	public function insertRepresentante($data){
		$this->db->insert('representantes', $data);
	}


	public function insert_db_compras($data)
	{
		$this->db->insert('compras', $data);
	}

	public function insert_db_ingresso($data)
	{
		$this->db->insert('ingresso', $data);
	}

	public function update_stands($data, $processa){
		foreach ($data as $datum){
			$this->db->set('id_PROCESSAMENTO', $processa, FALSE);
			$this->db->where('idSTANDS', $datum);
			$this->db->update('stands');
		}
	}

	public function consulta_preco_combos($combo)
	{
		$query = $this->db->query('SELECT preco FROM combos NATURAL JOIN precos_atividades WHERE idCOMBOS = '.$combo.';');
		return $query->row();
	}

	public function consulta_preco_atividades($atividade)
	{
		$query = $this->db->query("SELECT preco FROM atividades NATURAL JOIN precos_atividades WHERE idATIVIDADE = $atividade;");
		return $query->row();
	}

	public function consulta_usuario_compras($idCOMPRAS){
		$query = $this->db->query("SELECT * FROM compras  NATURAL JOIN clientes WHERE idCOMPRAS = $idCOMPRAS;");
		return $query->row();
	}
}
