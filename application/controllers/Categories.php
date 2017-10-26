<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Categories extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data = array(
			"title" => "Categories",
			"template" => "Category/index"
		);

		$this->load->view("admin", $data);

	}
}