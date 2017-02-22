<?php
Class Request_model extends CI_Model{
 
    var $table = 'reloga_request_qoute';

    public function __construct() {
        parent::__construct();
    }
    
    public function insert_request($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function fetch_all_request(){
    	$query = $this->db->get($this->table);
    	return $query->result();
    }


}
?>