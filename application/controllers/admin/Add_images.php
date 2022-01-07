<?php
defined('BASEPATH') or exit('No direct script access allowed');
use WebPConvert\WebPConvert;
class Add_images extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
	}
    public function add_image()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {

            $image_session = $this->session->userdata('images');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $source = 'assets/uploads/'.$this->upload->data('file_name');
            $destination = $source . '.webp';
            $options = [];
            WebPConvert::convert($source, $destination, $options);
            $this->session->set_userdata('images', $uploaded_images);
            pre($this->session->userdata('images'));
        }
        else {
            pre($this->upload->display_errors());
        }
    }

    public function svg_update()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {

            $image_session = $this->session->userdata('images_svg');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $this->session->set_userdata('images_svg', $uploaded_images);
            pre($this->session->userdata('images_svg'));
        }
        else {
            pre($this->upload->display_errors());
        }
    }


    public function add_image_2()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|svg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {

            $image_session = $this->session->userdata('images_2');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $source = 'assets/uploads/'.$this->upload->data('file_name');
            $destination = $source . '.webp';
            $options = [];
            WebPConvert::convert($source, $destination, $options);
            $this->session->set_userdata('images_2', $uploaded_images);
            pre($this->session->userdata('images_2'));
        }
        else {
            pre($this->upload->display_errors());
        }
    }

    public function add_image_all()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {
            $image_session = $this->session->userdata('images_all');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $source = 'assets/uploads/'.$this->upload->data('file_name');
            $destination = $source . '.webp';
            $options = [];
            WebPConvert::convert($source, $destination, $options);
            $this->session->set_userdata('images_all', $uploaded_images);
            pre($this->session->userdata('images_all'));
        }
        else {
            pre($this->upload->display_errors());
        }
    }

    public function add_image_all_2()
    {
        $uploaded_images = [];
        $config['upload_path'] = 'assets/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $this->load->library('Upload', $config);
        if ($this->upload->do_upload('file')) {
            $image_session = $this->session->userdata('images_2_all');
            if ($image_session == false) {
                $uploaded_images = [];
            } else {
                $uploaded_images = $image_session;
            }

            $uploaded_images[] = 'assets/uploads/'.$this->upload->data('file_name');
            $source = 'assets/uploads/'.$this->upload->data('file_name');
            $destination = $source . '.webp';
            $options = [];
            WebPConvert::convert($source, $destination, $options);
            $this->session->set_userdata('images_2_all', $uploaded_images);
            pre($this->session->userdata('images_2_all'));
        }
        else {
            pre($this->upload->display_errors());
        }
    }


}
