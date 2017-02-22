<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
   		$this->load->model('request_model','',TRUE);
	}

	public function index() {
		$this->load->view('common/header');
		$this->load->view('index');
		$this->load->view('common/footer');
	}

	public function about(){
		$this->load->view('common/header');
		$this->load->view('pages/about');
		$this->load->view('common/footer');
	}

	public function services(){
		$this->load->view('common/header');
		$this->load->view('pages/service');
		$this->load->view('common/footer');
	}

	public function portfolio(){
		$this->load->view('common/header');
		$this->load->view('pages/portfolio');
		$this->load->view('common/footer');
	}

	public function contact(){
		$this->load->view('common/header');
		$this->load->view('pages/contact');
		$this->load->view('common/footer');
	}

	public function requests(){
		$data = array(
						'fullname' =>$this->input->post('fullname') , 
						'email' => $this->input->post('email'), 
						'contact' => $this->input->post('contact'), 
						'skype_id' => $this->input->post('skype_id'), 
						'content' => $this->input->post('content'), 
						'send_from' => $this->input->post('send_from')
				);

		$insert = $this->request_model->insert_request($data);
		if ($insert) {
			echo $insert;		}
	}
}
