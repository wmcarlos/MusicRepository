<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Configurations extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data = array(
			"title" => "Configurations",
			"template" => "Configuration/index"
		);

		$this->load->view("admin", $data);
	}
}