<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Sounds extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model("Sound");
	}

	public function index(){

		$data = array(
			"title" => "Sounds",
			"template" => "Sound/index",
			"Sounds" => $this->Sound->read_all()
		);

		$this->load->view("admin", $data);

	}

	public function new(){

		$data = array(
			"title" => "New Sound",
			"template" => "Sound/new",
			"categories" => $this->Sound->get_categories(),
			"artists" => $this->Sound->get_artists()
		);

		$this->load->view("admin", $data);

	}

	public function create(){
		$data = array(
			"name" => $this->input->post("name"),
			"avatar" => "avatar.png"
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->Sound->create($data);

		}

		redirect("Sounds");
	}

	public function read($id = -1){

		$data = array(
			"title" => "Update Sound",
			"template" => "Sound/update",
			"Sound" => $this->Sound->read($id)
		);

		$this->load->view("admin", $data);

	}

	public function update($id = -1){
		$data = array(
			"name" => $this->input->post("name"),
			"avatar" => "avatar_updated.png"
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->Sound->update($id, $data);

		}

		redirect("Sounds");
	}

	public function delete($id = -1){

		$this->Sound->delete($id);

		redirect("Sounds");

	}
}