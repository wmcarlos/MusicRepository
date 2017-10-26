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

	public function new(){

		$data = array(
			"title" => "New Category",
			"template" => "Category/new"
		);

		$this->load->view("admin", $data);

	}

	public function store(){
		
	}
}