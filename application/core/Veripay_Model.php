<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Veripay_Model extends CI_Model
{
    public function get_user($user_id)
    {
        $this->db->from('admin');
        $this->db->where(['id' => $user_id]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }
}