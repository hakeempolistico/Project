<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	} 
	
	
	public function index()
	{	
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			redirect ('/users/home');
		}
		else{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('users/index');
		}
		
	}
	public function index2()
	{	
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			redirect ('/users/home');
		}
		else{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('users/index_2');
		}
		
	}
	public function Login()
	{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('users/index');
			}
		
		
		else
		{
			if ($this->input->post())
			{
				$this->load->model('Users_model');				
				$data = $this->input->post();
				$this->Users_model->login($data['username'], $data ['password']);
		
				$result=$this->Users_model->login($data['username'], $data ['password']);
				
				if(!$result) {
					redirect('/users/index2');
				}
				
				else {
					$newdata = array(
			        'logged_in' => TRUE,
			        'id_no' => $result['0']['id_users']
					);
					$this->session->set_userdata($newdata);
					redirect ('/view/home');
				}
				
				echo $result;
				exit();
			}
		}
		
	}
		

	
	public function register()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('users/register');
	}
	
	public function register2()
	{	
		
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[40]');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('hidden_name', 'Hidden Name', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('student_no', 'Student No', 'trim|required|min_length[3]|max_length[20]|is_unique[student_info.student_no]');
		$this->form_validation->set_rules('course', 'Course', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('college', 'College', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('middlename', 'Middle Name', 'trim|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('contact_no', 'Contact No', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('sex', 'Sex', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('forgot_question', 'Question', 'trim|required|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('forgot_password', 'Answer', 'trim|required|min_length[3]|max_length[100]');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('users/register');
		}
		else
		{
			$this->load->model('Users_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->Users_model->add($data);
				$this->session->set_flashdata('msg','<div class="text-center w3-round w3-border w3-border-green" style = "color:green">Account Register Successful!</div>');
				redirect('users/register');

		}
		else{
$this->session->set_flashdata('msg','<div class="text-center w3-round w3-border w3-border-red" style = "color:red">Oops! Some Error.  Please try again later!!!</div>');
			redirect('users/register');
}
		}
		
	}
	
	
	public function forgot()
	{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('email', 'Email', 'required');
			
		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('users/forgot');
			}
		
		
		else
		{
			if ($this->input->post())
			{
				$this->load->model('Users_model');				
				$data = $this->input->post();
				$this->Users_model->fpass($data['email']);
		
				$result=$this->Users_model->fpass($data['email']);
				
				if(!$result) {
					redirect('/users/forgot');
				}
				
				else {
					$a = $data['email'];
					$redirect = "/users/question?email=".$a;
					redirect ($redirect);
				}
				
				echo $result;
				exit();
			}
		}
		
	}
	
	
	public function question()
	{	
		$this->load->model('Users_model');
		$a = $this->input->get('email');
		$this->data['q'] = $this->Users_model->getQuestion($a);
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->load->view('users/question', $this->data);
		

	}
	
	public function reset()
	{		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if ($this->form_validation->run() == FALSE)
			{
				$data['id'] = $this->input->get('id');
				$this->load->view('users/reset', $data);
			}

		if ($this->input->post())
			{
				$this->load->model('Users_model');				
				$data = $this->input->post();
				
		
				$result = $this->Users_model->getAnswer($data);
				$array = json_decode(json_encode($result), True);
				if(!$result) {
					redirect('/users/question');
				}
				
				else {
					$a = $array['0']['id_personal_info'];
					$redirect = "/users/reset?id=".$a;
					redirect ($redirect);
					
				}
			}
	}

	public function updatePass(){
	
		$this->load->model('Users_model');
		
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->Users_model->updatePass($data);
				redirect('users/');
			}
	}

}