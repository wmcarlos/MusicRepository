<?php

class Sound extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function create($data){

		$this->db->insert('mr_sounds', $data);

	}

	public function read($id){

		$query = $this->db->get_where("mr_sounds",['sound_id' => $id]);
		return $query->row();

	}

	public function read_all(){

		$query = $this->db->get("mr_sounds");
		return $query->result();

	}

	public function update($id, $data){

		$this->db->set($data);
		$this->db->where("sound_id",$id);
		$this->db->update("mr_sounds", $data);

	}

	public function delete($id){

		$this->db->delete("mr_sounds", "sound_id = " . $id);

	}

	public function get_categories(){

		$this->db->select("category_id, name");
		$query = $this->db->get("mr_categories");
		$categories = array();

		foreach($query->result() as $row){

			$categories[$row->category_id] = $row->name;
		
		}

		return $categories;

	}

	public function get_artists(){

		$this->db->select("artist_id, name");
		$query = $this->db->get("mr_artists");
		$artists= array();

		foreach($query->result() as $row){

			$artists[$row->artist_id] = $row->name;
		
		}

		return $artists;

	}

}