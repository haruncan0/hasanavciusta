<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends Veripay_Controller
{

    function __construct()
    {
        parent:: __construct();

        $this->load->model('admin/' . $this->router->fetch_class() . '_model', 'model');

    }

    public function index()
    {
        $this->is_admin_login();
        $this->load->view('admin/login');
    }

    public function logout()
    {
        $this->session->sess_destroy('admin_info');
        redirect(site_url('yonetim-paneli-giris'));
    }

    public function homepage_admin()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "home_page";
        $data->homepage = $this->model->get_homepage();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }

    public function edit_profile()
    {
        $this->admin_logout();
        $data = new stdClass();
        $data->active = "";
        $data->admin_info = $this->model->admin_info($this->session->userdata('admin_info')->id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_profile');
        $this->load->view('admin/footer');
    }

    public function add_slider()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "slider";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/slider/add');
        $this->load->view('admin/footer');
    }

    public function list_slider()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "slider";

        $data->slider = $this->model->get_slider();
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/slider/list');
        $this->load->view('admin/footer');
    }

    public function update_slider($id = '')
    {
        $this->admin_logout();

        if(empty($id)){
            redirect(site_url('yonetim-paneli/slider-listele'));
        }

        $data = new stdClass();
        $data->active = "slider";

        if(!$data->slider = $this->model->get_selected_slider($id)) {
            redirect(site_url('yonetim-paneli/slider-listele'));
        }

        $this->load->view('admin/header', $data);
        $this->load->view('admin/slider/update');
        $this->load->view('admin/footer');
    }

    public function contact()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "contact";

        $data->contact = $this->model->get_contact();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/contact');
        $this->load->view('admin/footer');
    }

    public function messages()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "messages";
        $data->messages = $this->model->get_messages();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/messages');
        $this->load->view('admin/footer');
    }


    public function site_settings($slug)
    {
        if(empty($slug)) {
            redirect(site_url('yonetim-paneli'));
        }
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "site_settings";
        $data->all_item = $this->model->get_site_all();
        if (!$data->site_settings = $this->model->get_site_settings($slug)) {
            redirect(site_url('yonetim-paneli'));
        } 
        $data->setting_active = $slug;

        $this->load->view('admin/header', $data);
        $this->load->view('admin/site_settings');
        $this->load->view('admin/footer');
    }

    public function tickets()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "tickets";

        $data->ticket = $this->model->get_ticket();



        $this->load->view('admin/header', $data);
        $this->load->view('admin/ticket/list');
        $this->load->view('admin/footer');
    }

    public function ticket_update($id = '')
    {
        if(empty($id)) {
            redirect(site_url('yonetim-paneli'));
        }

        $this->admin_logout();

        $data = new stdClass();
        $data->active = "tickets";

        $data->ticket = $this->model->get_selected_ticket($id);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/ticket/update');
        $this->load->view('admin/footer');
    }

    public function features()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "features";

        $data->features = $this->model->get_features();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/features');
        $this->load->view('admin/footer');
    }

    public function add_gallery()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "gallery";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/add');
        $this->load->view('admin/footer');
    }

    public function list_gallery()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "gallery";

        $data->gallery = $this->model->get_gallery();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/list');
        $this->load->view('admin/footer');
    }

    public function update_gallery($id)
    {
        $this->admin_logout();

        if(empty($id)){
            redirect(site_url('yonetim-paneli/galeri-listele'));
        }

        $data = new stdClass();
        $data->active = "gallery";

        if(!$data->gallery = $this->model->get_selected_gallery($id)) {
            redirect(site_url('yonetim-paneli/galeri-listele'));
        }

        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery/update');
        $this->load->view('admin/footer');
    }

    public function about()
    {
        $data = new stdClass();
        $data->active = "about";

        $data->about = $this->model->get_about();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/about');
        $this->load->view('admin/footer');
    }

    public function add_certificate()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "certificate";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/certificate/add');
        $this->load->view('admin/footer');
    }

    public function list_certificate()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "certificate";

        $data->certificate = $this->model->get_certificate();
        
        $this->load->view('admin/header', $data);
        $this->load->view('admin/certificate/list');
        $this->load->view('admin/footer');
    }


    public function update_certificate($id = '')
    {
        $this->admin_logout();

        if(empty($id)){
            redirect(site_url('yonetim-paneli/sertifika-listele'));
        }

        $data = new stdClass();
        $data->active = "certificate";

        if(!$data->certificate = $this->model->get_selected_certificate($id)) {
            redirect(site_url('yonetim-paneli/sertifika-listele'));
        }

        $this->load->view('admin/header', $data);
        $this->load->view('admin/certificate/update');
        $this->load->view('admin/footer');
    }

    public function add_product()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "product";

        $this->load->view('admin/header', $data);
        $this->load->view('admin/product/add');
        $this->load->view('admin/footer');
    }

    public function list_product()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "product";

        $data->product = $this->model->get_product();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/product/list');
        $this->load->view('admin/footer');
    }


    public function update_product($id = '')
    {
        $this->admin_logout();

        if(empty($id)){
            redirect(site_url('yonetim-paneli/urun-listele'));
        }

        $data = new stdClass();
        $data->active = "product";

        if(!$data->product = $this->model->get_selected_product($id)) {
            redirect(site_url('yonetim-paneli/urun-listele'));
        }

        $data->product_image_1 = $this->model->get_image_1($id);
        $data->product_image_2 = $this->model->get_image_2($id);

        $this->load->view('admin/header', $data);
        $this->load->view('admin/product/update');
        $this->load->view('admin/footer');
    }

    public function about_icons()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "about_icons";

        $data->icons = $this->model->get_icons();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/about_icons/list');
        $this->load->view('admin/footer');
    }

    public function icon_update($id = '')
    {
        $this->admin_logout();

        if(empty($id)){
            redirect(site_url('yonetim-paneli'));
        }

        $data = new stdClass();
        $data->active = "about_icons";

        if(!$data->icons = $this->model->get_selected_icon($id)) {
            redirect(site_url('yonetim-paneli'));
        }

        $this->load->view('admin/header', $data);
        $this->load->view('admin/about_icons/update');
        $this->load->view('admin/footer');
    }

    public function lighting_text()
    {
        $this->admin_logout();

        $data = new stdClass();
        $data->active = "lighting_text";
        $data->lighting_text = $this->model->get_lighting_text();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/lighting_text');
        $this->load->view('admin/footer');
    }


}