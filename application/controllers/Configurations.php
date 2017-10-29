<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Configurations extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Configuration");

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}
		
	}

	public function index(){

		$data = array(
			"title" => "Configurations",
			"template" => "Configuration/index",
			"Configuration" => $this->Configuration->read()
		);

		$this->load->view("admin", $data);
	}


	public function update(){
		$data = array(
			"name" => $this->input->post("name"),
			"logo" => "logo.png",
			"show_logo" => $this->input->post("show_logo"),
			"about" => $this->input->post("about"),
			"contact" => $this->input->post("contact"),
			"terms_and_conditions" => $this->input->post("terms_and_conditions"),
			"facebook_link" => $this->input->post("facebook_link"),
			"twitter_link" => $this->input->post("twitter_link"),
			"google_plus_link" => $this->input->post("google_plus_link"),
			"instagram_link" => $this->input->post("instagram_link"),
			"google_play_link" => $this->input->post("google_play_link"),
			"apple_store_link" => $this->input->post("apple_store_link")
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->Configuration->update($data);

		}

		redirect("Configurations");
	}
}