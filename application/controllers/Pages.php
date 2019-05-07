<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		public function index(){
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/home');
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
}
