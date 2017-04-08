<?php
class admin_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
		
	}

	public function login ($username, $password){
		$this->db->where('username',$username);
		$result = $this->db->get('admin_users');
		
		$result = $result->result_array();
		
		if(strcmp($result[0]['password'], $password) != 0) {

			return FALSE;		
		}
		
		else {
		return $result;
		}	
	}	

	public function log_in(){
		date_default_timezone_set("Asia/Manila");
		$time = time();
		$adminLog = array(
			'log_id' => '' ,
			'login' => $time,
			'admin_id' => $_SESSION['admin_id']
		);		
		$this->db->insert('admin_log', $adminLog);
	}

	public function log_out(){
		$this->db->select('log_id');
        $this->db->from('admin_log');
        $this->db->where('admin_id', $_SESSION['admin_id']); 
        $query = $this->db->get();
        $row = $query->last_row('array');


		date_default_timezone_set("Asia/Manila");
		$this->db->set('logout', time());
		$this->db->where('log_id',$row['log_id']);
		$this->db->update('admin_log');
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
	function getAdmin2(){
		$this->db->select('*');
        $this->db->from('admin_users');
        $this->db->where('admin_id', $_SESSION['admin_id']); 
        $query = $this->db->get();
		return $query->result();
	}
	function getAdminLog(){
		$this->db->select('*');
        $this->db->from('admin_log');
        $this->db->where('admin_id', $_SESSION['admin_id']); 
        $query = $this->db->get();
		return $query->result();
	}

	public function updateInfo($data){
		$this->db->where('admin_id', $_SESSION['admin_id'] );
		$this->db->update('admin_users', $data); 
	}
}
?>