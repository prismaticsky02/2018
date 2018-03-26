<?php
class login_controller extends CI_Controller {

        public function login_function($page = 'login_view')
        {
        	 if (! file_exists(APPPATH.'views/'.$page.'.php'))
        	{
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view($page);
        
        }
}