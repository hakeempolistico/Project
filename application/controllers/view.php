<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class View extends CI_Controller {
	function __construct()
	{
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
			redirect ('/users/people');
		}
	}

	public function index()
	{	
		
	}
		
	public function home()
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
				redirect('users/home');
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
	
	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->load->model('active_model');
		$data = array(
		'log' => 0
		);
		$result = $this->active_model->logout($data);
		redirect('users/');
		
	}
	public function feed(){
		
		redirect('/view/home');	
		
	}
	public function people(){
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			$this->load->database(); // load database
			$this->load->model('reqconfess_model'); // load model
			$this->load->model('Users_model'); // load model
			$this->load->model('active_model'); // load model
			$this->data['notifications'] = $this->reqconfess_model->getNoti();
			$this->data['posts'] = $this->reqconfess_model->getPosts(); 
			$this->data['details'] = $this->active_model->getPosts();
			$this->data['details2'] = $this->active_model->getPosts2();
			$this->data['details3'] = $this->active_model->getPosts3();
			$this->data['users'] = $this->Users_model->getUsers();
		
			$this->load->view('users/people', $this->data);	
		}
		else{
			redirect('users/');
		}
	}
	public function peopleSearch(){
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
		
		$this->load->model('Users_model');
		$this->load->model('admin_model');
			
			if($this->input->post()) {
				$fn = $this->input->post('search');
				$result = $this->Users_model->getUsers2($fn);
				$this->load->model('reqconfess_model'); // load model
				$this->load->model('active_model'); // load model
				$this->data['posts'] = $this->reqconfess_model->getPosts();  
				$this->data['details'] = $this->active_model->getPosts();
				$this->data['details2'] = $this->active_model->getPosts2();
				$this->data['details3'] = $this->active_model->getPosts3();
				$this->data['users'] = $result;
			
				$this->load->view('users/people', $this->data);	
			}
		}
		else{
			redirect('users/');
		}
	}
	
	public function admin(){
		$li = $this->session->userdata('logged_in');
		if($li == TRUE){
			$this->load->model('reqconfess_model'); // load model
			$this->load->model('active_model'); // load model
			$this->load->model('suggestions_model'); // load model
			$this->load->model('admin_model'); // load model
			$this->data['notifications'] = $this->reqconfess_model->getNoti();
			$this->data['posts'] = $this->reqconfess_model->getPosts2();
			$this->data['suggestions'] = $this->reqconfess_model->getSuggestions();
			$this->data['approved'] = $this->reqconfess_model->getApproved();
			$this->data['declined'] = $this->reqconfess_model->getDeclined();   
			$this->data['posts2'] = $this->reqconfess_model->getPosts3(); 
			$this->data['details'] = $this->active_model->getPosts();
			$this->data['details2'] = $this->active_model->getPosts2();
			$this->data['details3'] = $this->active_model->getPosts3();
			$this->data['suggestions'] = $this->suggestions_model->getSuggestions();
			$this->data['users'] = $this->admin_model->getUsers();
			$this->data['requests'] = $this->admin_model->getRequests();
			$this->data['appr'] = $this->admin_model->getApproved();
			$this->data['suggs'] = $this->admin_model->getSuggestions();
			$this->data['active'] = $this->admin_model->getActive();
			$this->data['admins'] = $this->admin_model->getAdmin();
		
			$this->load->view('users/admin', $this->data);	
		}
		else{
			redirect('users/');
		}
	}
	
	
	public function about(){
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
	
	public function contact_us(){
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
	

}