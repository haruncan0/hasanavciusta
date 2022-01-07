<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function login($post_data)
	{
		$this->db->from('admin');
		$this->db->where(['name' => $post_data->username]);
		$return_query = $this->db->get();
		if ($return_query->num_rows() > 0) {

			$admininfo = $return_query->row();
			if (password_verify($post_data->password, $admininfo->password)) {
				$this->session->set_userdata('admin_info', $admininfo);
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function admin_info($id)
	{
	    $this->db->from('admin');
		$this->db->where(['id' => $id]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0){
		    return $return_query->row();
        } else {
		    return false;
        }
	}

    public function get_slider()
    {
        $this->db->from('slider');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_slider($id)
    {
        $this->db->from('slider');
        $this->db->where(['id' => $id, 'deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_contact()
    {
        $this->db->from('contact');
        $this->db->where(['id' => 1]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_messages()
    {
        $this->db->from('messages');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_site_all()
    {
        $this->db->from('site_settings');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_site_settings($slug)
    {
        $this->db->from('site_settings')->where(['slug' => $slug]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_homepage()
    {
        $this->db->from("homepage");
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_ticket()
    {
        $this->db->from('ticket');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_ticket($id)
    {
        $this->db->from('ticket');
        $this->db->where(['id' =>$id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_features()
    {
        $this->db->from('features');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_gallery()
    {
        $this->db->from('gallery');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_gallery($id)
    {
        $this->db->from('gallery');
        $this->db->where(['id' =>$id, 'deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_about()
    {
        $this->db->from('about');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_certificate()
    {
       $this->db->from('certificates');
        $this->db->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        } 
    }

    public function get_selected_certificate($id)
    {
        $this->db->from('certificates');
        $this->db->where(['id' => $id, 'deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_product()
    {
        $this->db->select('id,title,status,position');
        $this->db->from('product')->where(['deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_product($id)
    {
        $this->db->from('product');
        $this->db->where(['id' => $id, 'deleted' => 0]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_image_1($id)
    {
        $this->db->from('images');
        $this->db->where(['product' => $id, 'deleted' => 0, 'rol' => 1]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_image_2($id)
    {
        $this->db->from('images');
        $this->db->where(['product' => $id, 'deleted' => 0, 'rol' => 2]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_icons()
    {
        $this->db->from('icons');
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->result();
        } else {
            return false;
        }
    }

    public function get_selected_icon($id)
    {
        $this->db->from('icons');
        $this->db->where(['id' => $id]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }

    public function get_lighting_text()
    {
        $this->db->from('contracts');
        $this->db->where(['id' => 1]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0){
            return $return_query->row();
        } else {
            return false;
        }
    }


}