<?php

/**
 * 
 */
class Search_model extends CI_Model
{
	public function getSearch($keyword){
		$this->db->like('link', $keyword);
		$query = $this->db->get('data');
		return $query->row_array();

	}
	// public function countSearch($keyword){
	// 	$query = $this->db->get('data');
	// 	$query = $this->db->like('link', $keyword);
	// 	return $query->num_rows();
	// }

	
	
}