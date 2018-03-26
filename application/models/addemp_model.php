<?php
class addemp_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function set_emp()
{
    $this->load->helper('url');
    //$pep = url_title($this->input->post('fname'), 'dash', TRUE);

    $data = array(
        'emp_fname' => $this->input->post('fname'),
        'emp_mname' => $this->input->post('mname'),
        'emp_lname' => $this->input->post('lname'),
        'emp_bdate' => $this->input->post('bdate'),
        'emp_position' => $this->input->post('position'),
        'emp_address' => $this->input->post('address'),
        'emp_contnum' => $this->input->post('contnum'),
        'UName' => $this->input->post('username'),
        'PWord' => $this->input->post('password')
    );
    
    //$query = $this->db->insert('employee', $data);
    //return $query;

    return $this->db->insert('employee', $data);
}
}