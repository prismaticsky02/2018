<?php
class Pages extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('url_helper');
        }
        
        public function index()
        {
                //$this->load->view('Templates/side-nav.php');
                $this->load->view('pages/dashboard_admin');
        }
}