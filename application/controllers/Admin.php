<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('admin_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		$user = $this->session->userdata('usuario');
		$res = $this->admin_model->verifica_user($user);
		if($res){
			$datanav = array(
				'cursos' => $this->admin_model->pesquisa_cursos(),
				'workshops' => $this->admin_model->pesquisa_workshops(),
				'palestras' => $this->admin_model->pesquisa_palestras(),
			);
			$data = array(
				'data' => $this->admin_model->transacoes(),
				'total' => $this->admin_model->total_amount(),
				'tec' => $this->admin_model->total_tecHHub()
			);
			$this->load->view('templates/admin-header');
			$this->load->view('templates/admin-nav');
			$this->load->view('templates/admin-leftnav', $datanav, $datanav);
			$this->load->view('templates/admin-headsection');
			$this->load->view('admin/admin-home', $data);
			$this->load->view('templates/admin-footer');
		}else{
			redirect(base_url('gerenciamento/login'));
		}

	}

	public function comissoes()
	{
		$user = $this->session->userdata('usuario');
		$res = $this->admin_model->verifica_user($user);
		if($res){
			$datanav = array(
				'cursos' => $this->admin_model->pesquisa_cursos(),
				'workshops' => $this->admin_model->pesquisa_workshops(),
				'palestras' => $this->admin_model->pesquisa_palestras(),
			);
			$this->load->view('templates/admin-header');
			$this->load->view('templates/admin-nav');
			$this->load->view('templates/admin-leftnav', $datanav);
			$this->load->view('templates/admin-headsection');
			$this->load->view('admin/admin-comissoes');
			$this->load->view('templates/admin-footer');
		}else{
			redirect(base_url('gerenciamento/login'));
		}
	}

	public function login()
	{
		$this->session->unset_userdata('usuario');
		$this->load->view('admin/admin-login');
	}

	public function errologin()
	{
		$this->session->unset_userdata('usuario');
		$this->load->view('admin/admin-errologin');
	}

	public function autlogin(){
		$user =$this->input->post('username');
		$pass =$this->input->post('password');
		$res = $this->admin_model->validation($user, $pass);
		if($res){
			$this->session->set_userdata('usuario', $user);
			redirect(base_url('gerenciamento/dashboard'));
		}else{
			redirect(base_url('gerenciamento/errologin'));
		}

	}

	public function resetpass(){
		$user = $this->session->userdata('usuario');
		$res = $this->admin_model->verifica_user($user);
		if($res){
			$this->load->view('admin/admin-pass');
		}else{
			redirect(base_url('gerenciamento/login'));
		}
	}

	public function cursos($id){
		$user = $this->session->userdata('usuario');
		$res = $this->admin_model->verifica_user($user);
		if($res){
			$datanav = array(
				'cursos' => $this->admin_model->pesquisa_cursos(),
				'workshops' => $this->admin_model->pesquisa_workshops(),
				'palestras' => $this->admin_model->pesquisa_palestras(),
			);
			$data = array(
				'data' => $this->admin_model->pesquisa_cursos_general($id),
				'total' => $this->admin_model->numeroParticipantesPagantes($id),
				'const' => $this->admin_model->constanteCurso($id),
				'tec' => $this->admin_model->n_Part_tecHHub_curso($id)
			);
			$this->load->view('templates/admin-header');
			$this->load->view('templates/admin-nav');
			$this->load->view('templates/admin-leftnav', $datanav);
			$this->load->view('templates/admin-headsection');
			$this->load->view('admin/admin-cursos', $data);
			$this->load->view('templates/admin-footer');
		}else{
			redirect(base_url('gerenciamento/login'));
		}

	}

	public function workshops($id){
		$user = $this->session->userdata('usuario');
		$res = $this->admin_model->verifica_user($user);
		if($res){
			$datanav = array(
				'cursos' => $this->admin_model->pesquisa_cursos(),
				'workshops' => $this->admin_model->pesquisa_workshops(),
				'palestras' => $this->admin_model->pesquisa_palestras(),
			);
			$this->load->view('templates/admin-header');
			$this->load->view('templates/admin-nav');
			$this->load->view('templates/admin-leftnav', $datanav);
			$this->load->view('templates/admin-headsection');
			$this->load->view('admin/admin-workshops');
			$this->load->view('templates/admin-footer');
		}else{
			redirect(base_url('gerenciamento/login'));
		}

	}

	public function palestras($id){
		$user = $this->session->userdata('usuario');
		$res = $this->admin_model->verifica_user($user);
		if($res){
			$datanav = array(
				'cursos' => $this->admin_model->pesquisa_cursos(),
				'workshops' => $this->admin_model->pesquisa_workshops(),
				'palestras' => $this->admin_model->pesquisa_palestras(),
			);
			$this->load->view('templates/admin-header');
			$this->load->view('templates/admin-nav');
			$this->load->view('templates/admin-leftnav', $datanav);
			$this->load->view('templates/admin-headsection');
			$this->load->view('admin/admin-palestras');
			$this->load->view('templates/admin-footer');
		}else{
			redirect(base_url('gerenciamento/login'));
		}

	}

	public function compra($id){
		$user = $this->session->userdata('usuario');
		$res = $this->admin_model->verifica_user($user);
		if($res){
			$datanav = array(
				'cursos' => $this->admin_model->pesquisa_cursos(),
				'workshops' => $this->admin_model->pesquisa_workshops(),
				'palestras' => $this->admin_model->pesquisa_palestras(),
			);
			$this->load->view('templates/admin-header');
			$this->load->view('templates/admin-nav');
			$this->load->view('templates/admin-leftnav', $datanav);
			$this->load->view('templates/admin-headsection');
			$this->load->view('admin/admin-compra');
			$this->load->view('templates/admin-footer');
		}else{
			redirect(base_url('gerenciamento/login'));
		}

	}
}
