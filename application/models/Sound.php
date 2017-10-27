<?php

class Sound extends CI_Model{

	public function __construct(){

		parent::__construct();

	}

	public function create($data, $detail){

		$this->db->insert('mr_sounds', $data);

		$id = $this->db->insert_id();

		$this->db->trans_start();

		for($i = 0; $i < count($detail); $i++){
			
			$this->db->insert("mr_sound_artists",[
				'artist_id' => $detail[$i],
				'sound_id' => $id
			]);

		}

		$this->db->trans_complete();

	}

	public function read($id){

		$query = $this->db->get_where("mr_sounds",['sound_id' => $id]);
		return $query->row();

	}

	public function read_all(){

		$query = $this->db->query("select 
				s.sound_id,
				c.name as category,
				s.title, 
				s.duration 
				from  mr_sounds as s
				inner join mr_categories as c on (c.category_id = s.category_id)");
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

	public function get_selected_artists($sound_id){

		$query = $this->db->query("select artist_id from mr_sound_artists where sound_id = " . $sound_id);
		return $query->result_array();
	}

}