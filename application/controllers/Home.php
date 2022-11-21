<?php

class Home extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		if(!$this->session->userdata('username')){
			redirect('auth');
		}
 
	}
	public function index() {
		$this->load->library('form_validation');
		
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
		
	}
}

