<?php

class suggestions_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}
	
	
	
	function addSuggestion($data){
		$this->db->insert('suggestion', $data);
	}

	function getSuggestions(){
		$this->db->select("*");
		$this->db->from('suggestion');
		$query = $this->db->get();
		return $query->result();
	}
	
	
}

?>