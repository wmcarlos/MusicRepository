<?php 
defined ("BASEPATH") OR exit ('No redirect script access allowed');

class Users extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("User");
	}

	public function index(){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

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

		if( !empty($this->session->has_userdata("email")) ){

			redirect("Users/dashboard");

		}else{

			$this->load->view('login', $data);

		}
		
		
	}

	public function dashboard(){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$data = array(
			"title" => "Dashboard",
			"template" => "Dashboard/index"
		);

		$this->load->view("admin", $data);

	}

public function new(){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$data = array(
			"title" => "New User",
			"template" => "User/new"
		);

		$this->load->view("admin", $data);

	}

	public function create(){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$data = array(
			"name" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"password" => sha1(md5($this->input->post("password"))),
			"avatar" => "user.jpg"
		);

		print $this->input->post("password");

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->User->create($data);

		}

		redirect("Users");
	}

	public function read($id = -1){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$data = array(
			"title" => "Update User",
			"template" => "User/update",
			"User" => $this->User->read($id)
		);

		$this->load->view("admin", $data);

	}

	public function update($id = -1){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$now = date('Y-m-d H:i:s');

		if( !empty($this->input->post("password")) ){

			$data = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"password" => sha1(md5($this->input->post("password"))),
				"avatar" => "user.jpg",
				"updated" => $now,
			);

		}else{

			$data = array(
				"name" => $this->input->post("name"),
				"email" => $this->input->post("email"),
				"avatar" => "user.jpg",
				"updated" => $now
			);

		}

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->User->update($id, $data);

		}

		redirect("Users");
	}

	public function delete($id = -1){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$this->User->delete($id);

		redirect("Users");

	}

	public function auth(){

		$data = array(
			"email" => $this->input->post("email"),
			"password" => sha1(md5($this->input->post("password")))
		);

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$getUser = $this->User->auth($data);

			if( isset($getUser) and !empty($getUser)){

				$this->session->set_userdata($getUser[0]);

				redirect("Users/dashboard");

			}else{

				redirect("Users/login");

			}
		}
	}

	public function logout(){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$data = array(
			"email" => $this->session->userdata('email'),
			"password" => $this->session->userdata('password')
		);

		$getUser = $this->User->auth($data);

		$this->session->sess_destroy();

		redirect("Users/login");

	}

	public function profile(){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		$data = array(
			"title" => "Profile",
			"template" => "User/profile",
			"User" => $this->User->read($this->session->userdata("user_id"))
		);

		$this->load->view("admin", $data);

	}

	public function update_profile($id){

		if( empty($this->session->has_userdata("email")) ){

			redirect("Users/login");

		}

		if( !empty($this->input->post("password")) ){
			$data = array(
				"name" => $this->input->post("name"),
				"password" => sha1(md5($this->input->post("password")))
			);
		}else{
			$data = array(
				"name" => $this->input->post("name")
			);
		}

		if($this->security->xss_clean($data, TRUE) !== FALSE){

			$this->User->update($id, $data);

			$getUser = $this->User->read_return_array($id);

			$this->session->set_userdata($getUser[0]);

			redirect("Users/profile");
		}
	}

}