<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ups extends CI_Controller {

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
		//$this->load->model('assetstatus_model');			
		//$data= $this->assetstatus_model->gets();		
		//print_r($data);
		
		$this->load->view('ups/ups.php');
		//$this->load->view('ups/ups.php',['data'=>$data]);
	}


	

	public function deleteAll(){
		$this->load->model('html_raw_viewer_model');
		$data= $this->html_raw_viewer_model->deleteAll();
		exit;
	
	}
	public function getsRawHtml()
	{
		$this->load->model('html_raw_viewer_model');
		$data= $this->html_raw_viewer_model->gets();
		
		//header('Content-Type: application/json; charset=utf-8');
		//echo json_encode( $data );
		print_r ($data[0]->body);
		exit;
		//$this->load->view('Anggota/index.php',$data);
	}

	public function save(){
		$this->load->model('html_raw_viewer_model');
		$data= $this->html_raw_viewer_model->save();
		
		exit;
	}

}
