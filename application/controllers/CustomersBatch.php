<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CustomersBatch extends CI_Controller {
public function index()
{
$this->load->view('newcustomerbatch_view');
}



public function batchInsert()
{
	$this->load->model('Customer_model');
	$result = $this->Customer_model->batchInsert($_POST);
		if($result){
			echo 1;
			$this->load->view('displayaray_view',$result);
		}
		else{
			echo 0;
		}
	exit;
}
}
?>