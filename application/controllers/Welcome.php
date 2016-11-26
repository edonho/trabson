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
		$id = $this->session->userdata("id");
		$this->load->view('Padrao/header');
		if($id != ""){
			$this->load->model('BancoModel','dados');//xablau
			$r = $this->dados->perfil($id);
			$this->load->view('perfil',$r);
		}else{
			$this->load->view('login');
		}
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
 		
  	}
  		public function autenticar(){
 		$login= $this->input->post("login");
 		$senha= $this->input->post("senha");
 		$this->load->model('BancoModel','sted');
 		$resp = $this->sted->logar($login,$senha);
 		if($resp){
 			 echo "<script> 
						alert('Login efetuado com sucesso!'); 
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/';
					</script>";
 		}else {
 		     echo "<script> 
						alert('Login ou senha invalida, Tente novamente!'); 
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/welcome/login';
					</script>";
 			}
  		}
  		
  		public function autenticarEstudio(){
 		$login= $this->input->post("login");
 		$senha= $this->input->post("senha");
 		$this->load->model('BancoModel','estud');
 		$resp = $this->estud->logarEstudio($login,$senha);
 		if($resp){
 			 echo "<script> 
						alert('Login efetuado com sucesso!'); 
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/';
					</script>";
 		}else {
 		     echo "<script> 
						alert('Login ou senha invalida, Tente novamente!'); 
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/welcome/login';
					</script>";
 			}
  		}
  		
  		
		public function cadastrar(){
	 		$data['nm_usuario']= $this->input->post("nome"). " " .$this->input->post("sobrenome");
	 		$data['dt_nascimento']= $this->input->post("nascimento");
	 		$data['ds_email']= $this->input->post("email");
	 		$data['ds_login']= $this->input->post("login");
	 		$data['ds_senha']= $this->input->post("senha");
	 		$data['sg_sexo'] = $this->input->post("sexo");
	 		$this->load->model('BancoModel','cad');
	 		$msg = $this->cad->cadastrar($data);
	 		if($msg== "Cadastrado com sucesso!"){
	 			echo "<script> 
						alert('".$msg."');
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/';
					</script>";
	 		}else{
	 			echo "<script> 
						alert('".$msg."');
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/welcome/cadastro';
					</script>";
	 		}
 		}
 			public function cadestudio(){
	 		$data['ds_estudio']= $this->input->post("nome");
	 		$data['ds_email']= $this->input->post("email");
	 		$data['ds_login']= $this->input->post("login");
	 		$data['ds_senha']= $this->input->post("senha");
	 		$data['cd_cnpj']= $this->input->post("cnpj");
	 		$this->load->model('BancoModel','cads');
	 		$msg = $this->cads->cadestudio($data);
	 		if($msg== "Estúdio cadastrado com sucesso!"){
	 			echo "<script> 
						alert('".$msg."');
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/';
					</script>";
	 		}else{
	 			echo "<script> 
						alert('".$msg."');
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/welcome/cadastro';
					</script>";
	 		}
 		}
 		public function mensagen(){
 			$data['nm_usuario'] = $this->input->post("nome");
	 		$data['ds_email'] = $this->input->post("email");
	 		$data['cd_telefone'] = $this->input->post("telefone");
	 		$data['ds_mensagem'] = $this->input->post("mensagem");
	 		$this->load->model('BancoModel','mensag');
	 		$msg = $this->mensag->mensagem($data);
	 		if($msg== "Mensagem enviada com sucesso!"){
	 			echo "<script> 
						alert('".$msg."');
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/';
					</script>";
	 		}else{
	 			echo "<script> 
						alert('".$msg."');
						window.location.href = 'https://traaaabson-edinho-1.c9users.io/index.php/welcome/mensagem';
					</script>";
	 		}
 		}
 	}
 	// public function error(){
 	// 	$this->load->view("error");
 	// }
  	

