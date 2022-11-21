<?php

class Bisnis extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		if(!$this->session->userdata('username')){
			redirect('auth');
		}
 
	}
	
	public function index() {

		
		$this->load->model('Bisnis_model');
		$this->load->library('pagination');

		$config['base_url'] = base_url().'bisnis/index';
		$config['total_rows'] = $this->Bisnis_model->countNoRemakebisnis();
		$config['per_page'] = 10;


		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</nav></ul>';

		$config['first_link'] = 'first';
		$config['first_tag_open'] = ' <li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'last';
		$config['last_tag_open'] = ' <li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = ' <li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = ' <li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = ' <li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['bisnis'] = $this->Bisnis_model->getNoRemake($config['per_page'], $data['start']);
		$data['judul'] = 'Konten Bisnis';

		// $query = $this->db->query("SELECT * FROM data WHERE remake=0 LIMIT 10,0");
		// $data['bisnis'] = $query->result_array();
		$this->load->view('template/header');
		$this->load->view('table', $data);
		$this->load->view('template/footer');
		
	}

	public function remake() {
		
		$this->load->model('Bisnis_model');
		$this->load->library('pagination');

		$config['base_url'] = base_url().'bisnis/remake';
		$config['total_rows'] = $this->Bisnis_model->countRemakebisnis();
		$config['per_page'] = 10;


		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</nav></ul>';

		$config['first_link'] = 'first';
		$config['first_tag_open'] = ' <li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'last';
		$config['last_tag_open'] = ' <li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = ' <li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = ' <li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = ' <li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['bisnis'] = $this->Bisnis_model->getRemake($config['per_page'], $data['start']);
		$data['judul'] = 'Konten Bisnis';

		// $query = $this->db->query("SELECT * FROM data WHERE remake=0 LIMIT 10,0");
		// $data['bisnis'] = $query->result_array();
		$this->load->view('template/header');
		$this->load->view('table', $data);
		$this->load->view('template/footer');
		
	}
}

