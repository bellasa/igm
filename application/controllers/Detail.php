<?php

class Detail extends CI_Controller
{
	function __construct(){
		parent::__construct();		
		if(!$this->session->userdata('username')){
			redirect('auth');
		}
 
	}
	public function index() {
		$this->load->helper('file');
		
		// return $this->db->get_where('data', array('link'=> $link))->row();
		$link = $this->uri->segment('2');

		$query1 = $this->db->get_where('data', array('link'=> $link));
		$row1 = $query1->row_array();

		$query2 = $this->db->get_where('humor', array('link'=> $link));
		$row2 = $query2->row_array();

		$query3 = $this->db->get_where('islami', array('link'=> $link));
		$row3 = $query3->row_array();

		if ($row1) {
			$data['row'] = $row1;
		} elseif ($row2) {
			$data['row'] = $row2;
		} else {
			$data['row'] = $row3;
		}
		
		// $query2 = $this->db->get_where('humor', array('link'=> $link));
		
		
		$this->load->view('template/header');
		$this->load->view('detail', $data);
		$this->load->view('template/footer');
			
	}
}

