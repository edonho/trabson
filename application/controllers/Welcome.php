<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index(){
		$this->load->model("BancoModel","bdm");
		$this->load->view('Padrao/header');
		$resp = $this->bdm->busca("e");
		$dados = array("data"=>$resp);
		$this->load->view('inicio',$dados);
		$this->load->view('Padrao/footer');
		
	}
	/*
	public function home(){
		$this->load->view('Padrao/header');
		$this->load->view('inicio');
		$this->load->view('Padrao/footer');
	}
	*/
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
		$resp = $this->bdm->busca($nome);
		$dados = array("data"=>$resp);
		$this->load->view('resultadoBusca',$dados);
		$this->load->view('Padrao/footer');
	}
	public function estudios(){
		$idEstudio = $this->input->get("idEstudio");
		$this->load->model('BancoModel','est');//xablau
		$this->load->view('Padrao/header');
		$r = $this->est->estudios($idEstudio);
		$resp = $r->result_array();
		$this->load->view("estudios",$resp[0]);
		$this->load->view('Padrao/footer');
	}
	
}
