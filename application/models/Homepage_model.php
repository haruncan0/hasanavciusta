<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_model extends CI_Model {


	public function site_settings($page)
	{
		$this->db->select('site_title,site_description,banner,image_path');
		$this->db->from('site_settings')->where(['slug' => $page]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_homepage()
	{
		$this->db->from('homepage');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_about()
	{
		$this->db->from('about');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_slider()
	{
		$this->db->select('title,description,button_text,link,image_path');
		$this->db->from('slider');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_features()
	{
		$this->db->from('features');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_ticket()
	{
		$this->db->from('ticket');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_gallery()
	{
		$this->db->from('gallery');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$this->db->order_by('position', 'ASC');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_certificates()
	{
		$this->db->select('title,image_path');
		$this->db->from('certificates');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function header_product()
	{
		$this->db->select('title, slug');
		$this->db->from('product');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$this->db->order_by('position', 'ASC');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_product()
	{
		$this->db->select('id,title,slug,cover_text,
			(SELECT image_path FROM images WHERE product = product.id and rol = 1 and status = 1 and deleted = 0 order by position limit 1 ) as image_path');
		$this->db->from('product');
		$this->db->where(['status' => 1, 'deleted' => 0]);
		$this->db->order_by('position', 'ASC');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_images()
	{
		$this->db->select('product,image_path');
		$this->db->from('images');
		$this->db->where(['status' => 1, 'deleted' => 0, 'rol' => 1]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_selected_product($slug)
	{
		$this->db->select('id,title,description,storage,product_types,site_title,site_description');
		$this->db->from('product');
		$this->db->where(['slug' => $slug, 'status' => 1, 'deleted' => 0]);

		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_selected_product_images($id)
	{
		$this->db->select('image_path,rol');
		$this->db->from('images');
		$this->db->where(['product' => $id, 'status' => 1, 'deleted' => 0]);
		$this->db->order_by('position', 'ASC');

		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_icons()
	{
		$this->db->select('image_path');
		$this->db->from('icons');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_contact()
	{
		$this->db->from('contact');
		$this->db->where(['id' => 1]);
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_contract()
	{
		$this->db->from('contracts');
		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->result();
		} else {
			return [];
		}
	}

	public function get_selected_contract($slug)
	{
		$this->db->from('contracts');
		$this->db->where(['slug' => $slug]);

		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

	public function get_lighting_text()
	{
		$this->db->select('title,description');
		$this->db->from('contracts');
		$this->db->where(['id' => 1]);

		$return_query = $this->db->get();
		if($return_query->num_rows() > 0) {
			return $return_query->row();
		} else {
			return [];
		}
	}

}