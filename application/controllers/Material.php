<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        //$this->load->helper('url_helper');
    }

    public function index(){
        $this->load->view('newmaterial_view');
    }

    public function process(){
        $data = array(
                'material_name' => $this->input->post('name'),
                'material_category' => $this->input->post('category'),
                'material_amount' => $this->input->post('amount'),
                'material_perquan' => $this->input->post('perquant'),
                'material_description' => $this->input->post('descript'));        
        $this->load->view("displaymat_view", $data);
    } 

}
?>