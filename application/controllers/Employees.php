<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('newemployee_view');
    }

    public function listemployee(){
        $this->load->model('Employee_model');
        $data['h']=$this->Employee_model->select(); 
        $this->load->view('listemployee_view', $data);
    }

    public function add_employee(){
        date_default_timezone_set('Asia/Manila');
        $date1 = date("Y-m-d", strtotime($this->input->post('birthday')));
        $timestamp = date('Y-m-d H:i:s');

        $data = array(
                'EMPLOYEE_FNAME' => $this->input->post('fname'),
                'EMPLOYEE_MNAME' => $this->input->post('mname'),
                'EMPLOYEE_LNAME' => $this->input->post('lname'),
                'EMPLOYEE_SEX' => $this->input->post('sex'),
                'EMPLOYEE_ADDRESS' => $this->input->post('address'),
                'EMPLOYEE_CONTACT' => $this->input->post('number'),
                'EMPLOYEE_BIRTHDATE' => $date1,
                'EMPLOYEE_EMAIL' => $this->input->post('email'),
                'EMPLOYEE_DATECREATED' => $timestamp,
                'EMPLOYEE_LASTCHANGED' => $timestamp,
                'EMPLOYEE_CHANGEDBY' => 'AABAWAG',
                'EMPLOYEE_STATUS' => 'Active');
        
        $this->load->model('Employee_model');
        
        if($this->Employee_model->add($data)){
            $this->load->view("displayemp_view", $data);
        }
        else{
            echo "Data Not Inserted";
        }       
    }               

}

?>