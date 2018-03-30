<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Deceased_controller extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('newdeceased_view');
    }

    public function process(){
        $data = array(
                'deceased_name' => $this->input->post('name'),
                'deceased_birthdate' => $this->input->post('birthday'),
                'deceased_deathdate' => $this->input->post('deathday'),
                'deceased_sex' => $this->input->post('sex'));        
        $this->load->view("displaydecd_view", $data);
    } 

}
?>