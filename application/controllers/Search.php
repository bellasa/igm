<?php

class Search extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		if(!$this->session->userdata('username')){
			redirect('auth');
		}
 
	}
	public function index() {
		
		$this->load->library('form_validation');
		$this->load->helper('file');



		$keyword = $this->input->post('keyword');




		// $this->load->model('Search_model');

		// $data['row'] = $this->Search_model->getSearch($keyword);

		// // $query = $this->db->query("SELECT * FROM data WHERE remake=0 LIMIT 10,0");
		// // $data['bisnis'] = $query->result_array();
		// $this->load->view('template/header');
		// $this->load->view('detail', $data);
		// $this->load->view('template/footer');

		$query1 = $this->db->get_where('data', array('link'=> $keyword));
		$row1 = $query1->row_array();

		$query2 = $this->db->get_where('humor', array('link'=> $keyword));
		$row2 = $query2->row_array();

		$query3 = $this->db->get_where('islami', array('link'=> $keyword));
		$row3 = $query3->row_array();

		if ($row1) {
			$data['row'] = $row1;
		} elseif ($row2) {
			$data['row'] = $row2;
		} else {
			$data['row'] = $row3;
		}
		
		// $this->form_validation->set_error_delimiters('<div class="invalid-feedback">', '</div>');
		$this->form_validation->set_rules('keyword','Keyword','required|exact_length[11]');
		$this->form_validation->set_message('required', 'Harus diisi!');
		$this->form_validation->set_message('exact_lenght', 'Harus 11 karakter!');

	
		

		if ($this->form_validation->run() == FALSE)
	    {
	    	$this->load->view('template/header');
			$this->load->view('home');
			$this->load->view('template/footer');
	    } else {
	    	$this->load->view('template/header');
			$this->load->view('detail', $data);
			$this->load->view('template/footer');
	    }
		
		
	}
}

