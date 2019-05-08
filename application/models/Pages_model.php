<?php
class pages_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function pesquisa_atividades_general($id)
	{
		if ($id > 100 AND $id < 200) {
			$query = $this->db->query('SELECT nomeATIVIDADES, lote, preco FROM atividades NATURAL JOIN precos_atividades NATURAL JOIN atividades WHERE idATIVIDADE >100 AND idATIVIDADE < 200;');
			return $query->result();
		} elseif ($id > 200 AND $id < 300) {
			$query = $this->db->query('SELECT nomeATIVIDADES, lote, preco FROM atividades NATURAL JOIN precos_atividades NATURAL JOIN atividades WHERE idATIVIDADE >200 AND idATIVIDADE < 300;');
			return $query->result();
		} else {
			$query = $this->db->query('SELECT nomeATIVIDADES, lote, preco FROM atividades NATURAL JOIN precos_atividades NATURAL JOIN atividades WHERE idATIVIDADE >300 AND idATIVIDADE < 400;');
			return $query->result();
		}
	}

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
		$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividades WHERE idATIVIDADE >100 AND idATIVIDADE < 200;');
		return $query->result();
	}

	public function pesquisa_workshops()
	{
		$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividades WHERE idATIVIDADE >200 AND idATIVIDADE < 300;');
		return $query->result();
	}

	public function pesquisa_concursos()
	{
		$query = $this->db->query('SELECT * FROM atividades NATURAL JOIN precos_atividades WHERE idATIVIDADE >300 AND idATIVIDADE < 400;');
		return $query->result();
	}

	public function pesquisa_combos($id = null)
	{
		if($id == null){
			$query = $this->db->query('SELECT * FROM combos NATURAL JOIN precos_atividades;');
			return $query->result();
		}
		$query = $this->db->query("SELECT * FROM combos WHERE idCOMBOS = $id");
		return $query->result();
	}

	public function pesquisa_cliente($cpf){
		$query = $this->db->query("SELECT * FROM clientes WHERE cpf = $cpf;");
		return $query->row();
	}

	public function pesquisaIdCompras($cpf, $tempo_atual){
		$query = $this->db->query("SELECT idCOMPRAS FROM compras WHERE cpf = $cpf AND data_compra = $tempo_atual;");
		return $query->row();
	}

	public function pesquisa_atv_combo($combo){
		$query = $this->db->query("SELECT idATIVIDADE FROM combo_has_atividades WHERE idCOMBOS = $combo;");
		return $query->result();
	}

	public function verifica_cliente_atv($cpf, $idATIVIDADE){
		$query = $this->db->query("SELECT * FROM atividades_has_clientes_has_compras WHERE cpf = $cpf AND idATIVIDADE = $idATIVIDADE;");
		return $query->result();
	}

	public function insert_db_atividades($data)
	{
		$this->db->insert('atividades', $data);
	}

	public function insert_db_atividades_has_clientes_has_compras($data)
	{
		$this->db->insert('atividades_has_clientes_has_compras', $data);
	}

	public function insert_db_clientes($data)
	{
		$this->db->insert('clientes', $data);
	}

	public function insert_db_compras($data)
	{
		$this->db->insert('compras', $data);
	}

	public function insert_db_ingresso($data)
	{
		$this->db->insert('ingresso', $data);
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
}
