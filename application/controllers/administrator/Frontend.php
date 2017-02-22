<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){//if no have session
			redirect('__administrator','refresh');
			exit();
		}
	}

	public function home() {
		$data = array(
						'title' => 'Frontend Management',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/frontend/home',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}

	public function about() {
		$data = array(
						'title' => 'Frontend Management',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/frontend/about',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}

	public function services() {
		$data = array(
						'title' => 'Frontend Management',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/frontend/services',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}

	public function porfolio() {
		$data = array(
						'title' => 'Frontend Management',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/frontend/porfolio',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}

	public function contact() {
		$data = array(
						'title' => 'Frontend Management',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/frontend/contact',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}
}
