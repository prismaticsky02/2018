<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
       $this->load->view('newuser_view');
    }

    public function listuser(){
        $this->load->model('User_model');
        $data['h']=$this->User_model->select(); 
        $this->load->view('listuser_view', $data);
    }

    public function add_user(){
        date_default_timezone_set('Asia/Manila');
        $timestamp = date('Y-m-d H:i:s');
        
        $data = array(
                'USER_NAME' => $this->input->post('uname'),
                'USER_PASSWORD' => $this->input->post('pword'),
                'USER_ROLE' => $this->input->post('emp'),
                'EMPLOYEE_ID' => $this->input->post('empid'),
            	'USER_DATECREATED' => $timestamp,
            	'USER_LASTCHANGED' => $timestamp,
            	'USER_CHANGEDBY' => 'AABAWAG',
            	'USER_STATUS' => 'Active');

        $this->load->model('User_model');
        
        if($this->User_model->add($data)){
            $this->load->view("displayuser_view", $data);
        }
        else{
            echo "Data Not Inserted";
        }
    }

    public function batch_insert()
    {
        $this->load->model('User_model');
        $result = $this->User_model->batch_insert($_POST);
        if($result){
            echo 1;
            $this->load->view('displayuser_view',$result);
        }
        else{
            echo 0;
        }
        exit;
    } 
}

?>