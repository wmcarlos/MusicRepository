<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function dashboard(){

		$data = array(
			"title" => "Admin Panel",
			"template" => "dashboard/dashboard"
		);
		
		$this->load->view('Admin', $data);
	}

}