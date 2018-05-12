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

	function batchInsert($data){
			date_default_timezone_set('Asia/Manila');
        	$timestamp = date('Y-m-d H:i:s');
			$count = count($data['count']);

			for($i = 0; $i<$count; $i++){
				$date1 = date("Y-m-d", strtotime($data['jbdate'][$i]));
				$entries[] = array(
					'EMPLOYEE_FNAME' => $data['jfname'][$i],
                	'EMPLOYEE_MNAME' => $data['jmname'][$i],
                	'EMPLOYEE_LNAME' => $data['jlname'][$i],
                	'EMPLOYEE_SEX' => $data['jsex'][$i],
                	'EMPLOYEE_ADDRESS' => $data['jaddress'][$i],
                	'EMPLOYEE_CONTACT' => $data['jcontact'][$i],
                	'EMPLOYEE_BIRTHDATE' => $date1,
                	'EMPLOYEE_EMAIL' => $data['jemail'][$i],
                	'EMPLOYEE_DATECREATED' => $timestamp,
                	'EMPLOYEE_LASTCHANGED' => $timestamp,
                	'EMPLOYEE_CHANGEDBY' => 'AABAWAG',
                	'EMPLOYEE_STATUS' => 'Active');
			}

			$this->db->insert_batch('employee_tbl', $entries); 
			if($this->db->affected_rows() > 0)
				return 1;
			else
				return 0;
		}
}

?>