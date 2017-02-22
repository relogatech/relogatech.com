<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){//if no have session
			redirect('__administrator','refresh');
			exit();
		}
	}

	public function index() {
		$data = array(
						'title' => 'Reports',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/reports/index',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}
}
