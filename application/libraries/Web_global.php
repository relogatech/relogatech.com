<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_global {

	private $CI;

	public function __construct(){
		$this->CI =& get_instance();
	}

	/*Global Variable*/
	public function default_data(){		
		$data = array(
						'base_url' =>  base_url()
					);
		var_dump($data);
		return (array) $data;
	}

}
