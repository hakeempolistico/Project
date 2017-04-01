<?php

class Users_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}
	
	public function login ($username, $password){
	$this->db->where('username',$username);
		$result = $this->db->get('users');
		
		$result = $result->result_array();
		
		if(strcmp($result[0]['password'], $password) != 0) {
			return FALSE;		
		}
		
		else {
		
		$data2 = array(
               'log' => 1,
            );
		
		$this->db->update('users', $data2, "username = '$username'");		
		return $result;
		
		}	
	}
	
	public function fpass ($email){
	$this->db->where('email',$email);
		$result = $this->db->get('personal_info');
		
		$result = $result->result_array();
		
		
		return $result;
		
		}
	
	public function add($data) {
		$usersInfo = array(
			'id_users' => '' ,
			'username' =>$data['username'],
			'password' => $data['password'] ,
			'cpassword' => $data['cpassword'] ,
			'firstname' => $data['firstname'] ,
			'lastname' => $data['lastname'] ,
			'log' => '' ,
			'admin' => ''		
		);		
		$this->db->insert('users', $usersInfo);
		
		$id = $data['id_users'];
		$dn = $data['firstname'];
		$ln = $data['lastname'];
		$personalInfo = array(
			'id_personal_info' => '' ,
			'display_name' => $dn." ".$ln,
			'first_name' => $dn ,
			'last_name' => $ln ,
			'middle_name' => $data['middlename'] ,
			'email' => $data['email'] ,
			'contact_no' => $data['contact_no'] ,
			'birthdate' => $data['birthdate'],
			'sex' => $data['sex'],
			'forgot_question' => $data['forgot_question'],
			'forgot_password' => $data['forgot_password'] 
		);
		$this->db->insert('personal_info', $personalInfo); 
		
		$studentInfo = array(
			'id_student_info' => '' ,
			'student_no' => $data['student_no'],
			'course' => $data['course'] ,
			'college' => $data['college'] ,
			'year_graduated' => '' 			
		);
		$this->db->insert('student_info', $studentInfo); 
		
		$confessionInfo = array(
			'id_confession_info' => '' ,
			'confession_approved' => '',
			'confession_requests' => '' ,
			'hidden_name' => $data['hidden_name']			
		);
		$this->db->insert('confession_info', $confessionInfo);	
		
		}

	public function getUsers(){
			$this->db->select('*');
            $this->db->from('personal_info'); 
            $this->db->join('student_info', 'student_info.id_student_info=personal_info.id_personal_info', 'left');
            $this->db->join('confession_info', 'confession_info.id_confession_info=personal_info.id_personal_info', 'left');
            $query = $this->db->get();
            return $query->result();
	}

	public function getUsers2($fn){
			$this->db->select('*');
            $this->db->from('personal_info'); 
            $this->db->join('student_info', 'student_info.id_student_info=personal_info.id_personal_info', 'left');
            $this->db->join('confession_info', 'confession_info.id_confession_info=personal_info.id_personal_info', 'left');
            $this->db->like('display_name', $fn);
            $query = $this->db->get();
            return $query->result();
	}

	public function getQuestion($a){
			$this->db->select('*');
            $this->db->from('personal_info');
            $this->db->where('email',$a); 
            $query = $this->db->get();
            return $query->result();
	}


	public function getAnswer($data){
			$this->db->select('*');
            $this->db->from('personal_info');
            $this->db->where('forgot_password',$data['forgot_password']); 
            $query = $this->db->get();
            return $query->result();
	}

	public function updatePass($data){
		$this->db->where('id_users', $data['id_users'] );
		unset($data['id']);		
		$this->db->update('users', $data); 
	}
		
}

?>