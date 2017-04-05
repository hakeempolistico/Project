<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_test extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		echo 'FOR ALL UNIT TESTING RELATED FUNCTIONS';
	}

	function unitTesting() {

		$this->load->library('unit_test');
		$this->load->model('Users_model');
		$this->load->model('reqconfess_model');
		$this->load->model('admin_model');

		$username = 'hakeem';
		$password = 'hakeem';
		$test_name = 'Login Success';
		$test_note = 'Test login function when input is correct';

		$result = $this->Users_model->login($username, $password);

		$this->unit->run($result, 'is_array', $test_name, $test_note);

		$username = 'hakeem';
		$password = 'keemo';
		$test_name = 'Login Fail';
		$test_note = 'Test login function when input is incorrect';

		$result = $this->Users_model->login($username, $password);

		$this->unit->run($result, 'is_false', $test_name, $test_note);

		$test_name = 'Get Confessions';
		$test_note = 'Test get confession function';

		$result = $this->reqconfess_model->getPosts();

		$this->unit->run($result, 'is_array', $test_name, $test_note);

		$test_name = 'Get Active Users';
		$test_note = 'Test get active users function';

		$result['active'] = $this->admin_model->getActive();
		$array = json_decode(json_encode($result), True);
		$a = $array['active']['0']['count'];

		$this->unit->run($a, 'is_numeric', $test_name, $test_note);

		echo $this->unit->report();
}


}
