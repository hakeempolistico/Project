<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confession extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		echo 'FOR ALL CONFESSION RELATED FUNCTIONS';
	}

	public function reqcon(){
		$this->load->model('reqconfess_model');
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->reqconfess_model->req($data);
				redirect('/view/home');
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
				$rd = "/view/home#agree".$idc;
				$result = $this->confession_model->agree($idc,$idu);
				redirect($rd);
				}
			}
			else if($a==1){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/view/home#agree".$idc;
				$result = $this->confession_model->agree2($idc,$idu);
				redirect($rd);
			}
			
		}
		else if($d==1){
		
			if($this->input->get()){
			$idc = $this->input->get('idc');
			$idu = $this->input->get('idu');
			$rd = "/view/home#agree".$idc;
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
				$rd = "/view/home#agree".$idc;
				$result = $this->confession_model->disagree($idc,$idu);
				redirect($rd);				
				}
			}
			else if($d==1){
				if($this->input->get()){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/view/home#agree".$idc;
				$result = $this->confession_model->agree2($idc,$idu);
				redirect($rd);
				}
			}
		}
		else if($a==1){
			if($this->input->get()){
				$idc = $this->input->get('idc');
				$idu = $this->input->get('idu');
				$rd = "/view/home#agree".$idc;
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
			redirect('/view/home');
		}
	}

	
}

