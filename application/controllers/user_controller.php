<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('newuser_view');
    }

    public function process(){
        $data = array(
                'employee_uname' => $this->input->post('uname'),
                'employee_pword' => $this->input->post('pword'),
                'employee_role' => $this->input->post('role'));        
        $this->load->view("displayuser_view", $data);
    } 

}
?>