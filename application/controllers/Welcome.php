<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index(){
		$this->load->view('Padrao/header');
		$this->load->view('inicio');
		$this->load->view('Padrao/footer');
	}
	
}
