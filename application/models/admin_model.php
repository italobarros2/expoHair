<?php
class Admin_model extends CI_Model
{

	//Conectar ao banco de dados
	public function __construct()
	{
		$this->load->database();
	}

	public function validation($user, $pass)
	{
		$this->db->where('usuario', $user);
		$this->db->where('senha', sha1($pass));
		$query = $this->db->get('usuario_sistema');
		return $query->row_array();
	}

	public function verifica_user($user)
	{
		$this->db->where('usuario', $user);
		$query = $this->db->get('usuario_sistema');
		return $query->row_array();
	}

	public function transacoes()
	{
		$query = $this->db->query('SELECT idCOMPRAS, Nome, email, telefone, cpf, Cidade, sexo, total, idVENDOR, validacao FROM compras NATURAL JOIN clientes;');
		return $query->result();
	}

	public function total_amount()
	{
		$query = $this->db->query('SELECT SUM(total) as total FROM compras WHERE validacao = "pago"');
		return $query->row();
	}

	public function total_tecHHub()
	{
		$query = $this->db->query('SELECT SUM(total) as total FROM compras WHERE tipoPagamento != "dinheiro" AND validacao = "pago"');
		return $query->row();
	}

	public function pesquisa_cursos_general($id)
	{
		/*if($id >100 AND $id < 200){
			$query = $this->db->query('SELECT Nome, email, telefone, cpf, Cidade, sexo, validacao FROM clientes NATURAL JOIN compras NATURAL JOIN cursos_has_clientes NATURAL JOIN cursos WHERE idCURSOS >100 AND idCURSOS < 200;');
			return $query->result();
		}elseif ($id >200 AND $id < 300){
			$query = $this->db->query('SELECT Nome, email, telefone, cpf, Cidade, sexo, validacao FROM clientes NATURAL JOIN compras NATURAL JOIN cursos_has_clientes NATURAL JOIN cursos WHERE idCURSOS >200 AND idCURSOS < 300;');
			return $query->result();
		}else{
			$query = $this->db->query('SELECT Nome, email, telefone, cpf, Cidade, sexo, validacao FROM clientes NATURAL JOIN compras NATURAL JOIN cursos_has_clientes NATURAL JOIN cursos WHERE idCURSOS >300 AND idCURSOS < 400;');
			return $query->result();
		}*/
		$query = $this->db->query('SELECT Nome, email, telefone, cpf, Cidade, sexo, validacao FROM clientes NATURAL JOIN compras NATURAL JOIN cursos_has_clientes NATURAL JOIN cursos WHERE idCURSOS ='.$id.';');
		return $query->result();
	}

	public function numeroParticipantesPagantes($id)
	{
		$query = $this->db->query('SELECT COUNT(*) AS qtd FROM cursos NATURAL JOIN cursos_has_clientes NATURAL JOIN compras WHERE idCURSOS ='.$id.' AND validacao = "pago";');
		return $query->row();
	}

	public function constanteCurso($id)
	{
		$query = $this->db->query('SELECT precoCURSO FROM cursos WHERE idCURSOS ='.$id.';');
		return $query->row();
	}

	public function n_Part_tecHHub_curso($id)
	{
		$query = $this->db->query('SELECT COUNT(*) AS qtd FROM compras NATURAL JOIN cursos_has_clientes WHERE tipoPagamento != "dinheiro" AND validacao = "pago" AND idCURSOS = '.$id.';');
		return $query->row();
	}

	public function pesquisa_cursos()
	{
		$query = $this->db->query('SELECT * FROM cursos WHERE idCURSOS >100 AND idCURSOS < 200;');
		return $query->result();
	}

	public function pesquisa_workshops()
	{
		$query = $this->db->query('SELECT * FROM cursos WHERE idCURSOS >200 AND idCURSOS < 300;');
		return $query->result();
	}

	public function pesquisa_palestras()
	{
		$query = $this->db->query('SELECT * FROM cursos WHERE idCURSOS >300 AND idCURSOS < 400;');
		return $query->result();
	}
}

