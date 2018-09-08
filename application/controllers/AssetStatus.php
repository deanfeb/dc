<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class assetstatus extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->styles=array();
			$this->meta=array();
			$this->scripts=array();
			$this->parts=array();
			//$this->parts[head] = $this->load->view("frontend/global/header.php", null, true);
			//$this->scripts = array("JQuery/jquery-1.4.2.min", "JQuery/form", "Core", "Frontend");
			//$this->styles = array("style");
			$this->title = "DC-SS";
			$this->user_name="";
		
	}	
	public function index()
	{ 
		$this->load->model('assetstatus_model');		

		
		$data= $this->assetstatus_model->gets();
		
		//print_r($data);


		

		$this->load->view('assetstatus/index.php',['data'=>$data]);
	}

	public function deleteAll(){
		$this->load->model('assetstatus_model');
		$data= $this->assetstatus_model->deleteAll();
		exit;
	
	}
	public function save(){
		$this->load->model('assetstatus_model');
		$data= $this->assetstatus_model->save();
		
		//$json_params = file_get_contents("php://input",true);
		//print_r($data);
		//print_r($_POST);
		exit;
		//echo $_POST['noang'];
	}

	public function getsAll()
	{
		$this->load->model('anggota_model');
		$data= $this->anggota_model->gets();
		//$data=new stdClass();
		//$data->nama='dian febrianto';
		//header('Content-Type: application/json');
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode( $data );
		exit;
		//$this->load->view('Anggota/index.php',$data);
	}


}
