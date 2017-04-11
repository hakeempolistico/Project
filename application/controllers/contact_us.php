<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
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
			redirect ('/contact_us/');
		}
	}

		public function update_info(){
			$this->load->model('active_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->active_model->update($data);
				redirect('/contact_us/');
			}
	}
	
	public function index()
	{
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			$this->load->model('reqconfess_model'); // load model
			$this->load->model('active_model'); // load model
			$this->data['posts'] = $this->reqconfess_model->getPosts2(); 
			$this->data['posts2'] = $this->reqconfess_model->getPosts3(); 
			$this->data['details'] = $this->active_model->getPosts();
			$this->data['details2'] = $this->active_model->getPosts2();
			$this->data['details3'] = $this->active_model->getPosts3();
		
			$this->load->view('users/contact_us', $this->data);	
		}
		else{
			redirect('users/');
		}
	}

    public function suggestion(){
		$this->load->model('suggestions_model');

			if($this->input->post()) {
			$data = $this->input->post();	
			$result = $this->suggestions_model->addSuggestion($data);
			$this->session->set_flashdata('msg','<div class="text-center w3-round w3-border w3-border-green" style = "color:green">Thank you for your suggestion! We will look into it.</div>');
			redirect('/contact_us/');
		}
		else{
			
			$this->session->set_flashdata('msg','<div class="text-center w3-round w3-border w3-border-red" style = "color:red">Oops! Some Error.  Please try again later!!!</div>');
			redirect('/contact_us/');
		}
	}	
}
