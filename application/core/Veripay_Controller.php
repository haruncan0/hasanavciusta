<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Veripay_Controller extends CI_Controller
{
    private $user;

    function __construct()
    {
        parent:: __construct();
        $this->load->model('Veripay_Model');
        $this->user = $this->session->userdata('admin_info');
    }

    public function get_user()
    {
        if ($this->user) {
            return $this->Veripay_Model->get_user_information($this->user->id);
        }
    }

    public function is_admin_login()
    {
        if ($this->user) {
            redirect(site_url('yonetim-paneli'));
        }
    }

    public function  admin_logout()
    {
        if(!$this->user) {
            redirect(site_url('yonetim-paneli-giris'));
        }

    }
}