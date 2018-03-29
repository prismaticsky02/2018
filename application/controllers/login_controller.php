<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('login_view');
    }

    public function process(){
        $data = array(
                'user_name' => $this->input->post('uname'),
                'user_password' => $this->input->post('pword'));        
        $this->load->view("displaymsg_view", $data);
    } 

    public function display_emp(){
        $data = array(
                'user_name' => $this->input->post('uname'),
                'user_password' => $this->input->post('pword'));        
        $this->load->view("displaymsg_view", $data);
    } 


}
?>