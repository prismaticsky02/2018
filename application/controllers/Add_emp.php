<?php
class Add_emp extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('addemp_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $this->add();
        }

        public function add()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Add New Employee';

    $this->form_validation->set_rules('emp_fname', 'First Name:', 'required');
    $this->form_validation->set_rules('emp_mname', 'Middle Name:', 'required');
    $this->form_validation->set_rules('emp_lname', 'Last Name:', 'required');
    $this->form_validation->set_rules('emp_bdate', 'Birthdate:', 'required');
    $this->form_validation->set_rules('emp_position', 'Position:', 'required');
    $this->form_validation->set_rules('emp_address', 'Address:', 'required');
    $this->form_validation->set_rules('emp_contnum', 'Contact Number:', 'required');
    $this->form_validation->set_rules('UName', 'Username:', 'required');
    $this->form_validation->set_rules('PWord', 'Password:', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('employee/add');
    }
    else
    {
        $this->addemp_model->set_emp();
        $this->load->view('pages/dashboard_admin');
    }
}
}