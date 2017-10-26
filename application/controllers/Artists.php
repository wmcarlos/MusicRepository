<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Artists extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$data = array(
			"title" => "Artists",
			"template" => "Artist/index"
		);

		$this->load->view("admin", $data);

	}
}