<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model{

	public function add($data){

		$count = $this->db->insert("customer_tbl",$data);

		if($count > 0){
			return true;
		}
		else{
			return false;
		}
	}
}

?>