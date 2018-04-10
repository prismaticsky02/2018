<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Spaces extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('newspace_view');
    }

 /**   public function process(){
        $data = array(
                'space_section' => $this->input->post('section'),
                'space_lot' => $this->input->post('lot'),
                'space_grave' => $this->input->post('grave'),
                'space_latitude' => $this->input->post('latitude'),
                'space_longitude' => $this->input->post('longitude'),
            	'space_status' => $this->input->post('status'));        
        $this->load->view("displayspace_view", $data);
    } 
*/
}
?>