<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Categories extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model("Category");

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}
	}

	public function index(){

		$data = array(
			"title" => "Categories",
			"template" => "Category/index",
			"categories" => $this->Category->read_all()
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

	public function create(){
		$data = array(
			"name" => $this->input->post("name")
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->Category->create($data);

		}

		redirect("Categories");
	}

	public function read($id = -1){

		$data = array(
			"title" => "Update Category",
			"template" => "Category/update",
			"category" => $this->Category->read($id)
		);

		$this->load->view("admin", $data);

	}

	public function update($id = -1){
		$data = array(
			"name" => $this->input->post("name")
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->Category->update($id, $data);

		}

		redirect("Categories");
	}

	public function delete($id = -1){

		$this->Category->delete($id);

		redirect("Categories");

	}
}