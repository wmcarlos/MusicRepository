<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Sounds extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data = array(
			"title" => "Sounds",
			"template" => "Sound/index"
		);

		$this->load->view("admin", $data);

	}
}