<?php
class login_controller extends CI_Controller {

        public function login_function($frompage = 'login_view')
        {
        	 if (! file_exists(APPPATH.'views/'.$frompage.'.php'))
        	{
                        show_404();
                }
        

         $this->load->view($frompage);
        }
 }
      //  $this->load->helper(array('form', 'url'));

        //        $this->load->library('form_validation');

//                if ($this->form_validation->run() == FALSE)
  //              {
    //                    $this->load->view('$frompage');
      //          }
        //        else
          //      {
            //            $this->load->view('$topage');
              //  }
        
        
