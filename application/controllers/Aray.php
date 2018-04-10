<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Aray extends CI_Controller {
public function index()
{
$this->load->view('array_view');
}



public function batchInsert()
{
	$this->load->model('Aray_model');
	$result = $this->Aray_model->batchInsert($_POST);
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