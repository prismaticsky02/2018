<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_controller extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('newemployee_view');
    }

    public function process(){
        $data = array(
                'employee_fname' => $this->input->post('fname'),
                'employee_mname' => $this->input->post('mname'),
                'employee_lname' => $this->input->post('lname'),
                'employee_address' => $this->input->post('address'),
                'employee_number' => $this->input->post('number'),
                'employee_birthday' => $this->input->post('birthday'),
                'employee_email' => $this->input->post('email'));        
        $this->load->view("displayemp_view", $data);
    } 

}
?>