<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_model extends CI_Model{

	function __construct()  
    {  
    	parent::__construct();  
    }  
      
    public function select()  
    {  
        $query = $this->db->get('material_tbl');  
        return $query;  
    }  

    public function add($data){

		$count = $this->db->insert("material_tbl",$data);

		if($count > 0){
			return true;
		}
		else{
			return false;
		}
	}
}

?>