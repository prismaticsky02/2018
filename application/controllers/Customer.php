<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('newcustomer_view');
    }

    public function process(){
        $data = array(
                'customer_name' => $this->input->post('name'),
                'customer_address' => $this->input->post('address'),
                'customer_contact' => $this->input->post('contact'),
                'customer_email' => $this->input->post('email'),
                'customer_type' => $this->input->post('type'),
                'customer_function' => $this->input->post('function'));        
        $this->load->view("displaycust_view", $data);
    } 

}
?>