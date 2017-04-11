<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	} 
	
	public function index()
	{	
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			$this->load->model('reqconfess_model'); // load model
			$this->load->model('active_model'); // load model
			$this->data['notifications'] = $this->reqconfess_model->getNoti();
			$this->data['posts'] = $this->reqconfess_model->getPosts2(); 
			$this->data['posts2'] = $this->reqconfess_model->getPosts3(); 
			$this->data['details'] = $this->active_model->getPosts();
			$this->data['details2'] = $this->active_model->getPosts2();
			$this->data['details3'] = $this->active_model->getPosts3();
		
			$this->load->view('users/about', $this->data);	
		}
		else{
			redirect('users/');
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
			redirect ('/about/');
		}
	}

		public function update_info(){
			$this->load->model('active_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->active_model->update($data);
				redirect('/about/');
			}
	}

	

	

}