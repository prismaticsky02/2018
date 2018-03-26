<?php
class Employ_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_emp($pep = FALSE)
{
        if ($pep === FALSE)
        {
                $query = $this->db->get('employee');
                return $query->result_array();
        }

        $query = $this->db->get_where('emp', array('pep' => $pep));
        return $query->row_array();
}
}