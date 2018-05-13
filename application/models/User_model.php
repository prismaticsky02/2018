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

	function batch_insert($data){
			date_default_timezone_set('Asia/Manila');
        	$timestamp = date('Y-m-d H:i:s');
			$count = count($data['count']);

			for($i = 0; $i<$count; $i++){
				$entries[] = array(
					'USER_NAME' => $data['jname'][$i],
					'USER_PASSWORD' => $data['jpass'][$i],
					'USER_ROLE' => $data['jrole'][$i],
					'EMPLOYEE_ID' => $data['jEmpID'][$i],
					'USER_DATECREATED' => $timestamp,
					'USER_LASTCHANGED' => $timestamp,
					'USER_CHANGEDBY' => 'AABAWAG',
					'USER_STATUS' => 'Active'
				);
			}

			$this->db->insert_batch('user_tbl', $entries); 
			if($this->db->affected_rows() > 0)
				return 1;
			else
				return 0;
		}

}

?>