<?php

class User extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function create($data){

		$this->db->insert('mr_users', $data);

	}

	public function read($id){

		$query = $this->db->get_where("mr_users",['user_id' => $id]);
		return $query->row();

	}

	public function read_return_array($id){

		$query = $this->db->get_where("mr_users",['user_id' => $id]);
		return $query->result_array();

	}

	public function read_all(){

		$query = $this->db->get("mr_users");
		return $query->result();

	}

	public function update($id, $data){

		$this->db->set($data);
		$this->db->where("user_id",$id);
		$this->db->update("mr_users", $data);
	}

	public function delete($id){

		$this->db->delete("mr_users", "user_id = " . $id);

	}

	public function auth($data){

		$email = $data["email"];
		$password = $data["password"];

		$query = $this->db->query("select * from mr_users where email = '" . $email . "' and password = '" . $password . "'");

		return $query->result_array();
	}

}