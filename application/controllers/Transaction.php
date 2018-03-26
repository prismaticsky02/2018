<?php
class Transaction extends CI_Controller {


        public function __construct()
        {
                parent::__construct();
                $this->load->model('trans_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['tron'] = $this->trans_model->get_trans();
               
                //$this->load->view('templates/header', $data);
                $this->load->view('transac/index', $data);
                //$this->load->view('templates/footer');
        }

        public function view($tren = NULL)
		{
        $data['tron_item'] = $this->trans_model->get_trans($tren);

        if (empty($data['tren_item']))
        {
                show_404();
        }
        //$this->load->view('templates/header', $data);
        $this->load->view('transac/trans', $data);
        //$this->load->view('templates/footer');
		}
}