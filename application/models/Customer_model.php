<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model{

	function __construct()  
    {  
    	parent::__construct();  
    }  
      
    public function select()  
    {  
        $query = $this->db->get('customer_tbl');  
        return $query;  
    }   

    public function add($data){

		$count = $this->db->insert("customer_tbl",$data);

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
					'CUSTOMER_NAME' => $data['jname'][$i],
                	'CUSTOMER_ADDRESS' => $data['jaddress'][$i],
                	'CUSTOMER_CONTACT' => $data['jcontact'][$i],
                	'CUSTOMER_EMAIL' => $data['jemail'][$i],
                	'CUSTOMER_TYPE' => $data['jtype'][$i],
                	'CUSTOMER_FUNCTION' => $data['jfunction'][$i],
                	'CUSTOMER_DATECREATED' => $timestamp,
                	'CUSTOMER_LASTCHANGED' => $timestamp,
                	'CUSTOMER_CHANGEDBY' => 'AABAWAG',
                	'CUSTOMER_STATUS' => 'Active');
			}

			$this->db->insert_batch('customer_tbl', $entries); 
			if($this->db->affected_rows() > 0)
				return 1;
			else
				return 0;
		}

}

?>