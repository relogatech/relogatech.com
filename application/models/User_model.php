<?php
Class User_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
    
    public function check_login($username, $password){
        $this -> db -> select('id, username, password');
        $this -> db -> from('reloga_user');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', MD5($password));
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1){
            return $query->result();
        }
        else{
            return false;
        }
    }
}
?>