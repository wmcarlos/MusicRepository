<?php

class Category extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function create($data){

		$this->db->insert('mr_categories', $data);

	}

	public function read($id){

		$query = $this->db->get_where("mr_categories",['category_id' => $id]);
		return $query->row();

	}

	public function read_all(){

		$query = $this->db->get("mr_categories");
		return $query->result();

	}

	public function update($id, $data){

		$this->db->set($data);
		$this->db->where("category_id",$id);
		$this->db->update("mr_categories", $data);

	}

	public function delete($id){

		$this->db->delete("mr_categories", "category_id = " . $id);

	}

}