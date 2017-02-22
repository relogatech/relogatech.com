<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitors extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$data = array(
						'title' => 'Visitors',
						'base_url' => base_url()
					);

		$this->parser->parse('administrator/common/header',$data);
		$this->parser->parse('administrator/visitors/index',$data);
		$this->parser->parse('administrator/common/footer',$data);
	}
}
