<?php
class User extends CI_Model
{
	public function get_info()
	{
		return $this->db->query("SELECT * FROM users")->result_array();
	}
	public function add($info)
	{
		$query ="INSERT INTO users (name, age) VALUES (?,?)";
		$values = array($info['name'], $info['age']);
		return $this->db->query($query,$values);
	}
	public function search($info)
	{	
		if ($info['search_key'] == ""){
			return $this->db->query("SELECT * FROM users")->result_array();
		}
		$query = "SELECT * FROM users WHERE (name LIKE ? OR age LIKE ?)";
		$values = array($info['search_key'], $info['search_key']);
		return $this->db->query($query,$values)->result_array();
	}
}
?>