<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('newmaterial_view');
    }

    public function listmaterial(){
        $this->load->model('Material_model');
        $data['h']=$this->Material_model->select(); 
        $this->load->view('listmaterial_view', $data);
    }

    public function add_material(){
        date_default_timezone_set('Asia/Manila');
        $timestamp = date('Y-m-d H:i:s');

        $data = array(
                'MATERIAL_NAME' => $this->input->post('name'),
                'MATERIAL_CATEGORY' => $this->input->post('category'),
                'MATERIAL_PRICE' => $this->input->post('amount'),
                'MATERIAL_PERQUANTITY' => $this->input->post('perquant'),
                'MATERIAL_DESCRIPTION' => $this->input->post('descript'),
                'MATERIAL_DATECREATED' => $timestamp,
                'MATERIAL_LASTCHANGED' => $timestamp,
                'MATERIAL_CHANGEDBY' => 'AABAWAG',
                'MATERIAL_STATUS' => 'Active');        
        
        $this->load->model('Material_model');
        
        if($this->Material_model->add($data)){
            $this->load->view("displaymat_view", $data);
        }
        else{
            echo "Data Not Inserted";
        }
    } 

}
?>