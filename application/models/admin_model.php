<?php
class admin_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}
	
	
	
	function approve($data){
		$this->db->set('confession_approved', 'confession_approved+1', FALSE);
		$this->db->where('id_confession_info',$data['id_users']);
		$this->db->update('confession_info');
		$this->db->insert('confession', $data);
		$this->db->set('approved', '1');
		$this->db->where('id_request', $data['id_request']);
		$this->db->update('request');
	}
	function decline($data){
		$this->db->set('declined', '1');
		$this->db->where('id_request', $data['id_request']);
		$this->db->update('request');
	}
	function getUsers(){
		$query = $this->db->query('SELECT count(id_users) as count from users');
		return $query->result();
	}
	function getRequests(){
		$query = $this->db->query('SELECT count(id_request) as count from request');
		return $query->result();
	}
	function getApproved(){
		$query = $this->db->query('SELECT count(id_request) as count from request where approved = 1');
		return $query->result();
	}
	function getSuggestions(){
		$query = $this->db->query('SELECT count(id_suggestion) as count from suggestion');
		return $query->result();
	}
	function getActive(){
		$query = $this->db->query('SELECT count(id_users) as count from users where log = 1');
		return $query->result();
	}
	function getAdmin(){
		$query = $this->db->query('SELECT count(id_users) as count from users where admin = 1');
		return $query->result();
	}
}
?>