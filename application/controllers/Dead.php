<?php
class Dead extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                $this->load->model('Dead_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['ded'] = $this->Dead_model->get_ded();      
                $this->load->view('record/deceased/index', $data);
        }

        public function view($deacs = NULL)
	{
        $data['ded_item'] = $this->Dead_model->get_ded($deacs);

        if (empty($data['ded_item']))
        {
                show_404();
        }
        //$this->load->view('templates/header', $data);
        $this->load->view('record/deceased/display_dead', $data);
        //$this->load->view('templates/footer');
	}
}