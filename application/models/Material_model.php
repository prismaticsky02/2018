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

	public function batch_insert($data){

			date_default_timezone_set('Asia/Manila');
        	$timestamp = date('Y-m-d H:i:s');
			$count = count($data['count']);
			
			for($i = 0; $i<$count; $i++){
				$entries[] = array(
					'MATERIAL_NAME' => $data['jname'][$i],
                	'MATERIAL_CATEGORY' => $data['jcat'][$i],
                	'MATERIAL_PRICE' => $data['jprice'][$i],
                	'MATERIAL_PERQUANTITY' => $data['jpquant'][$i],
                	'MATERIAL_DESCRIPTION' => $data['jdesc'][$i],
                	'MATERIAL_DATECREATED' => $timestamp,
                	'MATERIAL_LASTCHANGED' => $timestamp,
                	'MATERIAL_CHANGEDBY' => 'AABAWAG',
                	'MATERIAL_STATUS' => 'Active');
			}

			$this->db->insert_batch('material_tbl', $entries); 
			if($this->db->affected_rows() > 0)
				return 1;
			else
				return 0;
		}
}

?>