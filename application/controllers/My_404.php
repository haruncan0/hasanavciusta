<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_404 extends Veripay_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Homepage_model');
	}

	public function index()
	{
		$data = new StdClass();

		$data->page = "error_page";
		$data->site_setting = $this->Homepage_model->site_settings($data->page);
		$data->header_product = $this->Homepage_model->header_product();
		$data->product = $this->Homepage_model->get_product();
		$data->contact = $this->Homepage_model->get_contact();
		$data->all_contracts = $this->Homepage_model->get_contract();

		$this->load->view('header', $data);
		$this->load->view('error_page');
		$this->load->view('footer');
	}

}