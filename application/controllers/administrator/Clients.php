<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){//if no have session
			redirect('__administrator','refresh');
			exit();
		}
	}

	public function index() {
		$data = array(
						'title' => 'Clients',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/clients/index',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}
}
