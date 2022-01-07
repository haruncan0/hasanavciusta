<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends Veripay_Controller
{
	public function __construct()
	{
		parent::__construct();
		header('Content-Type: application/json');
		$this->result = new StdClass();
		$this->result->status = false;
		$this->load->model($this->router->fetch_class() . '_model', 'model');
	}

	public function response()
	{
		echo json_encode($this->result);
	}

	public function contact()
	{
		$post_data = new StdClass();

		$this->form_validation->set_rules('confirmation', 'Aydınlatma Metni', 'required|integer|max_length[1]|xss_clean', ['required' => 'Lütfen Aydınlatma Metnini Okuyup Onaylayınız']);
		$this->form_validation->set_rules('name_surname', 'Ad Soyad', 'required|trim|max_length[250]|xss_clean');
		$this->form_validation->set_rules('email', 'E-posta Adresiniz', 'valid_email|required|trim|max_length[250]|xss_clean');
		$this->form_validation->set_rules('phone', 'Telefon Numaranız', 'required|trim|min_length[16]|max_length[16]|xss_clean',[
			"min_length" => "Telefon Numarası en az 11 karakter olmalıdır.", "max_length" => "Telefon Numarası en fazla 11 karakter olmalıdır."]);
		$this->form_validation->set_rules('message', 'Mesajınız', 'required|trim|max_length[1500]|xss_clean');

		if ($this->form_validation->run() != false) {

			$confirm = $this->input->post('confirmation', true);
			if ($confirm == 1) {
				$post_data->name = $this->input->post('name_surname', true);
				$post_data->email = $this->input->post('email', true);
				$post_data->phone = $this->input->post('phone', true);
				$post_data->message = $this->input->post('message', true);
				$post_data->add_date = current_date();

				if ($this->model->add_contact($post_data)) {
					$this->result->status = true;
				} else {
					$this->result->error = "Bir Hata Oluştu Lütfen Tekrar Deneyiniz";
				}
			} else {
				$this->result->error = "Lütfen Aydınlatma Metnini Okuyup Onaylayınız";
			}

		} else {

			if(form_error('name_surname')) {
				$this->result->error = form_error('name_surname');
			} else if(form_error('email')) {
				$this->result->error = form_error('email');
			} else if (form_error('phone')) {
				$this->result->error = form_error('phone');
			} else if (form_error('message')) {
				$this->result->error = form_error('message');
			} else if (form_error('confirmation')) {
				$this->result->error = form_error('confirmation');
			}
		}
		$this->response();
	}

}