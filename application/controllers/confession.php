<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confession extends CI_Controller {

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
			redirect ('/confession/');
		}
	}
		public function index()
	{
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			$this->load->model('reqconfess_model'); // load model
			$this->load->model('active_model'); // load model
			$this->data['posts'] = $this->reqconfess_model->getPosts();
			$this->data['notifications'] = $this->reqconfess_model->getNoti();
			$this->data['comments'] = $this->reqconfess_model->getComments(); 
			$this->data['details'] = $this->active_model->getPosts();
			$this->data['details2'] = $this->active_model->getPosts2();
			$this->data['details3'] = $this->active_model->getPosts3();
			$this->load->view('welcome_message_2', $this->data);
		}
		else{
			redirect ('/users/');
		}
	}


		public function update_info(){
			$this->load->model('active_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->active_model->update($data);
				redirect('/confession/');
			}
	}

	public function notifications()
	{	
		
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			if($this->input->get()){
				$this->load->model('reqconfess_model'); // load model
				$this->load->model('active_model'); // load active_model
				$a = $this->input->get('title');
				$result = $this->reqconfess_model->getPostsNoti($a);
				$this->data['posts'] = $result;
				$this->data['notifications'] = $this->reqconfess_model->getNoti();
				$this->data['comments'] = $this->reqconfess_model->getComments(); 
				$this->data['details'] = $this->active_model->getPosts();
				$this->data['details2'] = $this->active_model->getPosts2();
				$this->data['details3'] = $this->active_model->getPosts3();
			$this->load->view('welcome_message_2', $this->data);
				}
			
		}
		else{
			redirect ('/users/');
		}
		
	}	

	public function reqcon(){
		$this->load->model('reqconfess_model');
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->reqconfess_model->req($data);
				redirect('/confession/');
		}
	}

	public function agree(){
		$this->load->model('confession_model');
		$a = $this->input->get('agr');
		$d = $this->input->get('disagr');
		if($d==0){
			if($a==0){
				if($this->input->get()){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/confession/feed#agree".$idc;
				$result = $this->confession_model->agree($idc,$idu);
				redirect($rd);
				}
			}
			else if($a==1){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/confession/feed#agree".$idc;
				$result = $this->confession_model->agree2($idc,$idu);
				redirect($rd);
			}
			
		}
		else if($d==1){
		
			if($this->input->get()){
			$idc = $this->input->get('idc');
			$idu = $this->input->get('idu');
			$rd = "/confession/feed#agree".$idc;
			$result = $this->confession_model->agree2($idc,$idu);
			$result2 = $this->confession_model->agree($idc,$idu);
			redirect($rd);
			}
			
		}
			
	}
	public function disagree(){
		$this->load->model('confession_model');
		$a = $this->input->get('agr');
		$d = $this->input->get('disagr');
		if($a==0){
			if($d==0){
				if($this->input->get()){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/confession/feed#agree".$idc;
				$result = $this->confession_model->disagree($idc,$idu);
				redirect($rd);				
				}
			}
			else if($d==1){
				if($this->input->get()){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/confession/feed#agree".$idc;
				$result = $this->confession_model->agree2($idc,$idu);
				redirect($rd);
				}
			}
		}
		else if($a==1){
			if($this->input->get()){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/confession/feed#agree".$idc;
				$result = $this->confession_model->agree2($idc,$idu);
				$result2 = $this->confession_model->disagree($idc,$idu);
				redirect($rd);
				}
		}
	}
	public function comment(){
		$this->load->model('reqconfess_model');
			
			if($this->input->post()) {
			$data = $this->input->post();	
			$result = $this->reqconfess_model->addComment($data);
			redirect('/confession/');
		}
	}



	
}

