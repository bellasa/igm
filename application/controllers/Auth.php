<?php

class Auth extends CI_Controller
{
	
	public function index() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_message('required', 'Harus diisi!');

		if ($this->form_validation->run() == FALSE)
	    {
			$this->load->view('template/header_2');
			$this->load->view('login');
			$this->load->view('template/footer');
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$passwordmd5 = md5($password);

			$query = $this->db->get_where('user', array('username'=> $username,'password' => $passwordmd5));
			if ($query->num_rows() == 1){
				$user = $query->row_array();
				$this->session->set_userdata('username', $user);
			} else {
				$this->session->set_flashdata('gagal','<div class="alert alert-danger m-3 alert-dismissible fade show" role="alert">Username dan Password salah! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>');
				redirect('auth');
			}

			redirect('home');
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('auth');
	}
}

