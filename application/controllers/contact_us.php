<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		echo 'FOR ALL Contact_us RELATED FUNCTIONS';
	}

    public function suggestion(){
		$this->load->model('suggestions_model');

			if($this->input->post()) {
			$data = $this->input->post();	
			$result = $this->suggestions_model->addSuggestion($data);
			$this->session->set_flashdata('msg','<div class="text-center w3-round w3-border w3-border-green" style = "color:green">Thank you for your suggestion! We will look into it.</div>');
			redirect('/view/contact_us');
		}
		else{
			
			$this->session->set_flashdata('msg','<div class="text-center w3-round w3-border w3-border-red" style = "color:red">Oops! Some Error.  Please try again later!!!</div>');
			redirect('/view/contact_us');
		}
	}	
}
