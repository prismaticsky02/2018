<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model{

	function __construct()  
    {  
    	parent::__construct();  
    }  
      
    public function select()  
    {  
        $query = $this->db->get('employee_tbl');  
        return $query;  
    }  

    public function add($data){

		$count = $this->db->insert("employee_tbl",$data);

		if($count > 0){
			return true;
		}
		else{
			return false;
		}
	}
}

?>