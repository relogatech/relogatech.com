<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requests extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){//if no have session
			redirect('__administrator','refresh');
			exit();
		}
		$this->load->model('request_model');
	}

	public function index() {
		$data = array(
						'title' 	   => 'Requests',
						'base_url'     => base_url(),
						'list_request' => $this->request_model->fetch_all_request()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/requests/index',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}

	public function view_request() {
		
	}
}
