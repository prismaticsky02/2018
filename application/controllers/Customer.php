<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('newcustomer_view');
    }

    public function add_customer(){
        date_default_timezone_set('Asia/Manila');
        $timestamp = date('Y-m-d H:i:s');
        
        $data = array(
                'CUSTOMER_NAME' => $this->input->post('name'),
                'CUSTOMER_ADDRESS' => $this->input->post('address'),
                'CUSTOMER_CONTACT' => $this->input->post('contact'),
                'CUSTOMER_EMAIL' => $this->input->post('email'),
                'CUSTOMER_TYPE' => $this->input->post('type'),
                'CUSTOMER_FUNCTION' => $this->input->post('function'),
                'CUSTOMER_DATECREATED' => $timestamp,
                'CUSTOMER_LASTCHANGED' => $timestamp,
                'CUSTOMER_CHANGEDBY' => 'AABAWAG',
                'CUSTOMER_STATUS' => 'Active'); 

        $this->load->model('Customer_model');
        
        if($this->Customer_model->add($data)){
            $this->load->view("displaycust_view", $data);
        }
        else{
            echo "Data Not Inserted";
        }       
    } 
    
}
?>