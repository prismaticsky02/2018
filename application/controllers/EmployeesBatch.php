<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class EmployeesBatch extends CI_Controller {
public function index()
{
$this->load->view('newemployeebatch_view');
}



public function batchInsert()
{
	$this->load->model('Employee_model');
	$result = $this->Employee_model->batchInsert($_POST);
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