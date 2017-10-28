<?php

class Configuration extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function read(){

		$query = $this->db->get("mr_configurations");
		return $query->row();

	}

	public function update($data){

		$this->db->set($data);
		$this->db->update("mr_configurations", $data);

	}
}