<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

	public function login_modfunc(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('uname'));
        $password = $this->security->xss_clean($this->input->post('pword'));
        
        // Prep the query
        $this->db->where('USER_NAME', $username);
        $this->db->where('USER_PASSWORD', $password);
        
        // Run the query
        $query = $this->db->get('user_tbl');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
       //     $row = $query->row();
         //   $data = array(
           //         'userid' => $row->USER_ID,
             //       'role' => $row->USER_ROLE,
               //     'name' => $row->USER_NAME,
                 //   'pword' => $row->USER_PASSWORD,
               //     'validated' => true
                 //   );
           // $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
  
    }
?>