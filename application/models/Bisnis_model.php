<?php

/**
 * 
 */
class Bisnis_model extends CI_Model
{
	public function getNoRemake($limit, $start){
		return $query = $this->db->get_where('data',array('remake' => 0), $limit, $start)->result_array();

	}
	public function countNoRemakebisnis(){
		return $query = $this->db->get_where('data',array('remake' => 0))->num_rows();
	}

	public function getRemake($limit, $start){
		return $query = $this->db->get_where('data',array('remake' => 1), $limit, $start)->result_array();

	}
	public function countRemakebisnis(){
		return $query = $this->db->get_where('data',array('remake' => 1))->num_rows();
	}

	
}