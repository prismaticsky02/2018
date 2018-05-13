<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Deceased_model extends CI_Model{

	function __construct()  
    {  
    	parent::__construct();  
    }  
      
    public function select()  
    {  
        $query = $this->db->get('deceased_tbl');  
        return $query;  
    }  

    public function add($data){

		$count = $this->db->insert("deceased_tbl",$data);

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
				$date1 = date("Y-m-d", strtotime($data['jbdate'][$i]));
				$date2 = date("Y-m-d", strtotime($data['jddate'][$i]));
				$entries[] = array(
					'DECEASED_NAME' => $data['jname'][$i],
                	'DECEASED_BIRTHDATE' => $date1,
                	'DECEASED_DEATHDATE' => $date2,
                	'DECEASED_SEX' => $data['jsex'][$i],
                	'DECEASED_DATECREATED' => $timestamp,
                	'DECEASED_LASTCHANGED' => $timestamp,
                	'DECEASED_CHANGEDBY' => 'AABAWAG',
                	'DECEASED_STATUS' => 'Buried');
			}

			$this->db->insert_batch('deceased_tbl', $entries); 
			if($this->db->affected_rows() > 0)
				return 1;
			else
				return 0;
		}
}

?>