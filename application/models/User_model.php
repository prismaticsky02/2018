<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

	function __construct()  
    {  
    	parent::__construct();  
    }  
      
    public function select()  
    {  
        $query = $this->db->get('user_tbl');  
        return $query;  
    }  

    public function add($data){

		$count = $this->db->insert("user_tbl",$data);

		if($count > 0){
			return true;
		}
		else{
			return false;
		}
	}
}

?>