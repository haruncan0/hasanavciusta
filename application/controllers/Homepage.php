<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends Veripay_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model($this->router->fetch_class() . '_model', 'model');
	}

	public function index()
	{
		$data = new StdClass();

		$data->page = "anasayfa";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->homepage = $this->model->get_homepage();
		$data->slider = $this->model->get_slider();
		$data->features = $this->model->get_features();
		$data->ticket = $this->model->get_ticket();
		$data->gallery = $this->model->get_gallery();
		$data->header_product = $this->model->header_product();
		$data->about_icons = $this->model->get_icons();
		$data->product = $this->model->get_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();


		$this->load->view('header', $data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function about()
	{
		$data = new StdClass();
		$data->page = "hakkimizda";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->ticket = $this->model->get_ticket();
		$data->header_product = $this->model->header_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();

		$data->about = $this->model->get_about();

		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}

	public function gallery()
	{
		$data = new StdClass();
		$data->page = "galeri";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->header_product = $this->model->header_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();

		$data->gallery = $this->model->get_gallery();

		$this->load->view('header', $data);
		$this->load->view('gallery');
		$this->load->view('footer');
	}

	public function certificate()
	{
		$data = new StdClass();
		$data->page = "certificate";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->header_product = $this->model->header_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();

		$data->certificate = $this->model->get_certificates();

		$this->load->view('header', $data);
		$this->load->view('certificate');
		$this->load->view('footer');
	}

	public function products()
	{
		$data = new StdClass();
		$data->page = "product";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->header_product = $this->model->header_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();

		$data->product = $this->model->get_product();

		$this->load->view('header', $data);
		$this->load->view('product');
		$this->load->view('footer');
	}

	public function product_detail($slug)
	{
		$data = new StdClass();
		$data->page = "product_detail";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->header_product = $this->model->header_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();

		if(!$data->item = $this->model->get_selected_product($slug)) {
			redirect(site_url('urunlerimiz'));
		}

		$data->item_image = $this->model->get_selected_product_images($data->item->id);


		$data->site_setting->site_title = $data->item->site_title;
		$data->site_setting->site_description = $data->item->site_description;

		$this->load->view('header', $data);
		$this->load->view('product_detail');
		$this->load->view('footer');
	}

	public function contact()
	{
		$data = new StdClass();
		$data->page = "iletisim";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->header_product = $this->model->header_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();
		$data->lighting_text = $this->model->get_lighting_text();

		$this->load->view('header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	public function contracts($slug)
	{
		$data = new StdClass();
		$data->page = "contracts";
		$data->site_setting = $this->model->site_settings($data->page);
		$data->header_product = $this->model->header_product();
		$data->contact = $this->model->get_contact();
		$data->all_contracts = $this->model->get_contract();

		if(!$data->contract = $this->model->get_selected_contract($slug)) {
			redirect(site_url('urunlerimiz'));
		}

		$data->site_setting->site_title = $data->contract->site_title;
		$data->site_setting->site_description = $data->contract->site_description;

		$this->load->view('header', $data);
		$this->load->view('contract');
		$this->load->view('footer');
	}




}