<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DeceasedBatch extends CI_Controller {
public function index()
{
$this->load->view('newdeceasedbatch_view');
}



public function batch_insert()
{
	$this->load->model('Deceased_model');
	$result = $this->Deceased_model->batch_insert($_POST);
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