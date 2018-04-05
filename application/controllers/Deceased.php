<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Deceased extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('newdeceased_view');
    }

    public function listdeceased(){
        $this->load->model('Deceased_model');
        $data['h']=$this->Deceased_model->select(); 
        $this->load->view('listdeceased_view', $data);
    }

    public function add_deceased(){
        date_default_timezone_set('Asia/Manila');
        $timestamp = date('Y-m-d H:i:s');
        $date1 = date("Y-m-d", strtotime($this->input->post('birthday')));
        $date2 = date("Y-m-d", strtotime($this->input->post('deathday')));

        $data = array(
                'DECEASED_NAME' => $this->input->post('name'),
                'DECEASED_BIRTHDATE' => $date1,
                'DECEASED_DEATHDATE' => $date2,
                'DECEASED_SEX' => $this->input->post('sex'),
                'DECEASED_DATECREATED' => $timestamp,
                'DECEASED_LASTCHANGED' => $timestamp,
                'DECEASED_CHANGEDBY' => 'AABAWAG',
                'DECEASED_STATUS' => 'Buried');  

        $this->load->model('Deceased_model');
        
        if($this->Deceased_model->add($data)){
            $this->load->view("displaydecd_view", $data);
        }
        else{
            echo "Data Not Inserted";
        }
    } 

}
?>