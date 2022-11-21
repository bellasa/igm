<?php

/**
 * 
 */
class Humor_model extends CI_Model
{
	public function getNoRemake($limit, $start){
		return $query = $this->db->get_where('humor',array('remake' => 0), $limit, $start)->result_array();

	}
	public function countNoRemake(){
		return $query = $this->db->get_where('humor',array('remake' => 0))->num_rows();
	}

	public function getRemake($limit, $start){
		return $query = $this->db->get_where('humor',array('remake' => 1), $limit, $start)->result_array();

	}
	public function countRemake(){
		return $query = $this->db->get_where('humor',array('remake' => 1))->num_rows();
	}

	
}