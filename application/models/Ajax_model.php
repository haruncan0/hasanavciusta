<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax_model extends CI_Model
{

	public function add_contact($post_data)
	{
		$this->db->set($post_data)->insert('messages');
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

}