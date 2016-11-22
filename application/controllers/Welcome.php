<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index(){
		$this->load->view('Padrao/header');
		$this->load->view('inicio');
		$this->load->view('Padrao/footer');
		
	}
	public function home(){
		$this->load->view('Padrao/header');
		$this->load->view('inicio');
		$this->load->view('Padrao/footer');
	}
	public function cadastro(){
		$this->load->view('Padrao/header');
		$this->load->view('cadastro');
		$this->load->view('Padrao/footer');
	}
	public function perfil(){
		$this->load->view('Padrao/header');
		$this->load->view('perfil');
		$this->load->view('Padrao/footer');
	}
	public function login(){
		$this->load->view('Padrao/header');
		$this->load->view('login');
		$this->load->view('Padrao/footer');
	}
	public function mensagem(){
		$this->load->view('Padrao/header');
		$this->load->view('mensagem');
		$this->load->view('Padrao/footer');
	}
	public function busca(){
		$nome = $this->input->get("buscarEstudio");
		$this->load->model("BancoModel","bdm");
		$this->load->view('Padrao/header');
		$data = $this->bdm->busca($nome);
		$this->load->view('resultadoBusca',array("data"=>$data));
		$this->load->view('Padrao/footer');
	}
	
}
