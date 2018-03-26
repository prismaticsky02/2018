<?php
class trans_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_trans($tren = FALSE)
{
        if ($tren === FALSE)
        {
                $query = $this->db->get('services');
                return $query->result_array();
        }

        $query = $this->db->get_where('tron', array('tren' => $tren));
        return $query->row_array();
}
}