<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	

	public function __construct() {
		parent::__construct();

		$this->load->model('Users_model');		
		$this->load->model('reqconfess_model'); // load model
		$this->load->model('active_model'); // load model
		$this->load->model('suggestions_model'); // load model
		$this->load->model('admin_model'); // load model
	}
	
	

	public function index()
	{	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('admin/admin_login');
		
	}

	public function admin(){
			$this->data['posts'] = $this->reqconfess_model->getPosts2();
			$this->data['suggestions'] = $this->reqconfess_model->getSuggestions();
			$this->data['approved'] = $this->reqconfess_model->getApproved();
			$this->data['declined'] = $this->reqconfess_model->getDeclined();   
			$this->data['posts2'] = $this->reqconfess_model->getPosts3(); 
			$this->data['suggestions'] = $this->suggestions_model->getSuggestions();
			$this->data['users'] = $this->admin_model->getUsers();
			$this->data['requests'] = $this->admin_model->getRequests();
			$this->data['appr'] = $this->admin_model->getApproved();
			$this->data['suggs'] = $this->admin_model->getSuggestions();
			$this->data['active'] = $this->admin_model->getActive();
			$this->data['admins'] = $this->admin_model->getAdmin();
			$this->data['admins2'] = $this->admin_model->getAdmin2();
			$this->data['activities'] = $this->admin_model->getAct();
		
			$this->load->view('admin/admin', $this->data);	

	}

	public function admin_login()
	{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
		if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('/admin/admin_login');
			}
		
		
		else
		{
			if ($this->input->post())
			{
						
				$data = $this->input->post();
				$this->admin_model->login($data['username'], $data ['password']);
		
				$result=$this->admin_model->login($data['username'], $data ['password']);
				if(!$result) {
					redirect('/admin/');
				}
				
				else {
					$newdata = array(
			        'admin_log' => TRUE,
			        'admin_id' => $result['0']['admin_id']
					);
					$this->session->set_userdata($newdata);
					$this->admin_model->log_in();
					redirect ('/admin/admin');
				}
				
				echo $result;
				exit();
			}
		}
		
	}

	public function logout(){
		$this->admin_model->log_out();
		$this->session->unset_userdata('admin_log');
		$this->session->unset_userdata('admin_id');
		redirect('/admin/');
	}

	public function approveRequest(){
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->admin_model->approve($data);
				redirect('/admin/admin');
			}
	}
	public function declineRequest(){

			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->admin_model->decline($data);
				redirect('/admin/admin');
			}
	}

	function do_upload()
	{	
		$fn = $this->input->post('fn');
		$config['upload_path'] = './uploads/';
		$config['file_name'] = $fn;
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
			exit;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			redirect ('/admin/admin');
		}
	}
}
