<?php
class displaymsg_controller extends CI_Controller {

        public function display_function($page = 'displaymsg_view')
        {
        	 if (! file_exists(APPPATH.'views/'.$displaymsg_view.'.php'))
        	{
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view($page);
        
        }
}