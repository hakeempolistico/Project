<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class View extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	} 
	
	public function index()
	{	
		echo "ALL REDIRECTS";
	}
	
	public function logout(){
		redirect('/users/logout');	
	}

	public function feed(){
		redirect('/confession/');	
	}

	public function people(){	
		redirect('/people/');			
	}

	
	public function about(){
		redirect('/about/');
	}
	
	public function contact_us(){
		redirect('/contact_us/');
	}
	

}