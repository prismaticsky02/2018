<?php
class Dead_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_ded($deacs = FALSE)
{
        if ($deacs === FALSE)
        {
                $query = $this->db->get('deceased');
                return $query->result_array();
        }

        $query = $this->db->get_where('ded', array('deacs' => $deacs));
        return $query->row_array();
}
}