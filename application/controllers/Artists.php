<?php 
defined ("BASEPATH") OR exit ("No Redirect Script Access Allowed");

class Artists extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model("Artist");

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}
	}

	public function index(){

		$data = array(
			"title" => "Artists",
			"template" => "Artist/index",
			"Artists" => $this->Artist->read_all()
		);

		$this->load->view("admin", $data);

	}

	public function new(){

		$data = array(
			"title" => "New Artist",
			"template" => "Artist/new"
		);

		$this->load->view("admin", $data);

	}

	public function create(){
		$data = array(
			"name" => $this->input->post("name"),
			"avatar" => "avatar.png"
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->Artist->create($data);

		}

		redirect("Artists");
	}

	public function read($id = -1){

		$data = array(
			"title" => "Update Artist",
			"template" => "Artist/update",
			"Artist" => $this->Artist->read($id)
		);

		$this->load->view("admin", $data);

	}

	public function update($id = -1){
		$data = array(
			"name" => $this->input->post("name"),
			"avatar" => "avatar_updated.png"
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->Artist->update($id, $data);

		}

		redirect("Artists");
	}

	public function delete($id = -1){

		$this->Artist->delete($id);

		redirect("Artists");

	}
}