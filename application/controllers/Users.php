<?php 
defined ("BASEPATH") OR exit ('No redirect script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();

	}

	public function index(){

		$data = array(
			"title" => "Login"
		);
		$this->load->view('login', $data);

	}

	public function dashboard(){

		$data = array(
			"title" => "Dashboard",
			"template" => "Dashboard/index"
		);

		$this->load->view("admin", $data);

	}

}