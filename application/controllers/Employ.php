<?php
class Employ extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                $this->load->model('Employ_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['emp'] = $this->Employ_model->get_emp();
               
                //$this->load->view('templates/header', $data);
                $this->load->view('employee/index', $data);
                //$this->load->view('templates/footer');
        }

        public function view($pep = NULL)
		{
        $data['emp_item'] = $this->Employ_model->get_emp($pep);

        if (empty($data['emp_item']))
        {
                show_404();
        }
        //$this->load->view('templates/header', $data);
        $this->load->view('employee/display_emp', $data);
        //$this->load->view('templates/footer');
		}
}