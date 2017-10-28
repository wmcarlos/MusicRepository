<?php 
defined ("BASEPATH") OR exit ('No redirect script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("User");
	}

	public function index(){

		$data = array(
			"title" => "Users",
			"template" => "User/index",
			"Users" => $this->User->read_all()
		);

		$this->load->view("admin", $data);
	}

	public function login(){

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

public function new(){

		$data = array(
			"title" => "New User",
			"template" => "User/new"
		);

		$this->load->view("admin", $data);

	}

	public function create(){
		$data = array(
			"name" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"password" => sha1(md5($this->input->post("password"))),
			"avatar" => "user.jpg",
			"role" => $this->input->post("role")
		);

		print $this->input->post("password");

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->User->create($data);

		}

		redirect("Users");
	}

	public function read($id = -1){

		$data = array(
			"title" => "Update User",
			"template" => "User/update",
			"User" => $this->User->read($id)
		);

		$this->load->view("admin", $data);

	}

	public function update($id = -1){

		$now = date('Y-m-d H:i:s');

		if( !empty($this->input->post("password")) ){

			$data = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"password" => sha1(md5($this->input->post("password"))),
				"avatar" => "user.jpg",
				"role" => $this->input->post("role"),
				"updated" => $now,
			);

		}else{

			$data = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"avatar" => "user.jpg",
				"role" => $this->input->post("role"),
				"updated" => $now
			);

		}

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->User->update($id, $data);

		}

		redirect("Users");
	}

	public function delete($id = -1){

		$this->User->delete($id);

		redirect("Users");

	}

	public function auth(){
		
	}

}