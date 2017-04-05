<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		echo 'FOR ALL ADMIN RELATED FUNCTIONS';
	}

	public function approveRequest(){
		
		$this->load->model('admin_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->admin_model->approve($data);
				redirect('/view/admin');
			}
	}
	public function declineRequest(){
		
		$this->load->model('admin_model');
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->admin_model->decline($data);
				redirect('/view/admin');
			}
	}
}
