<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
   		$this->load->model('user_model','',TRUE);
	}

	public function index() {
		$data = array(
						'title' => 'Administrator',
						'base_url' => base_url()
					);
		if($this->session->userdata('user')){//if have session
     		//Go to dashboard
			redirect('administrator/dashboard', 'refresh');
		}
		$this->parser->parse('administrator/index',$data);
	}

	public function check_login(){
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');

		if($this->form_validation->run() == FALSE) {
     		//Field validation failed.  User redirected to login page
			redirect('__administrator?login=false','refresh');
		}
		else {
     		//Go to dashboard
			redirect('administrator/dashboard', 'refresh');
		}
	}

	public function check_database($password) {
   		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

   		//query the database
		$result = $this->user_model->check_login($username, $password);

		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username
					);
				$this->session->set_userdata('user', $sess_array);
			}
			return TRUE;
		}
		else {
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}

	public function logout(){
	   	$this->session->unset_userdata('user');
	   	session_destroy();
		redirect('__administrator','refresh');
		exit();
	}
}
