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
        $this->load->model('admin/' . $this->router->fetch_class() . '_model', 'model');
    }

    public function response()
    {
        echo json_encode($this->result);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Kullanıcı Adı', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'Şifre', 'required|trim|xss_clean');
        if ($this->form_validation->run() != false) {
            $password = $this->input->post('password', true);
            $username = $this->input->post('username', true);
            if ($this->model->login($password, $username)) {

                if ($this->session->userdata('admin_info')) {
                    if ($this->session->userdata('admin_info')->status == 0) {
                        $this->result->error = "Sisteme Erişim Yetkiniz Yok";
                        $this->session->sess_destroy('admin_info');
                    } else {
                        $this->result->status = true;
                    }
                }
            } else {
                $this->result->error = "Kullanıcı Adı veya Şifre Hatalı";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_account_genaral()
    {
        $post_data = new stdClass();
        $id = $this->session->userdata('admin_info')->id;
        $this->form_validation->set_rules('user_name', 'Kullanıcı Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('name_surname', 'Ad Soyad', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->name_surname = $this->input->post('name_surname', true);
            $post_data->user_name = $this->input->post('user_name', true);

            if($this->session->userdata('images')) {
                $post_data->profil_photo = $this->session->userdata('images')[0];
            }

            if ($this->model->update_account_genaral($post_data,$id)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Güncelleme İşlemi Başarısız Tekrar Denneyin";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_pass_account()
    {
        $post_data = new stdClass();
        $id = $this->session->userdata('admin_info')->id;
        $this->form_validation->set_rules('old_pass', 'Eski Şifre', 'required|trim|max_length[250]');
        $this->form_validation->set_rules('password', 'Yeni Şifre', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('confirm-password', 'Yeni Şİfre Tekrar', 'required|trim|max_length[250]|xss_clean|matches[password]');

        if ($this->form_validation->run() != false) {

            $old_pass = $this->input->post('old_pass');
            if(password_verify($old_pass,$this->session->userdata('admin_info')->password)) {
                $post_data->password = password_hash($this->input->post('password', true),PASSWORD_DEFAULT);

                if ($this->model->update_account_pass($post_data,$id)) {
                    $this->result->status = true;
                } else {
                    $this->result->error = "Güncelleme İşlemi Başarısız Tekrar Denneyin";
                }

            } else {
                $this->result->error = "Eski Şifrenizi Hatalı Giridiniz";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    // Slider başlangıç___________________________________________________________
    public function add_slider()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Açıklama', 'required|trim|max_length[250]');
        $this->form_validation->set_rules('button_text', 'Buton Metni', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('link', 'Bağlantı', 'trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {

            $post_data->title = $this->input->post('title', true);
            $post_data->description = $this->input->post('description', false);
            $post_data->button_text = $this->input->post('button_text', true);
            $post_data->link = $this->input->post('link', true);
            $post_data->add_date = current_date();

            if ($this->session->userdata('images')) {

                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');

                if ($this->model->add_slider($post_data)) {
                    $this->result->url = site_url('yonetim-paneli/slider-listele');
                    $this->result->status = true;
                } else {
                    $this->result->error = "Slider Eklenirken Bir Hata Oluştu Lütfen Tekrar Deneyin.";
                }
            } else {
                $this->result->error = "Lütfen Bir Resim Ekleyin.";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_slider()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Açıklama', 'required|max_length[250]');
        $this->form_validation->set_rules('button_text', 'Buton Metni', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('link', 'Link', 'trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->title = $this->input->post('title', true);
            $post_data->description = $this->input->post('description', false);
            $post_data->button_text = $this->input->post('button_text', true);
            $post_data->link = $this->input->post('link', true);

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_slider($post_data)) {
                $this->result->url = site_url('yonetim-paneli/slider-listele');
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function slider_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'slider';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_slider()
    {

        $id = $this->input->post('id', true);
        $table_name = 'slider';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }
    // Slider bitiş___________________________________________________________

    //İletişim Bilgileri Başlangıç________________________________________________________________

    public function update_contact()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('phone', 'Telefon', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('email', 'E-Mail', 'required|trim|max_length[250]|xss_clean|valid_email');
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('instagram', 'İnstagram', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('address', 'Adres', 'required|trim|xss_clean');
        $this->form_validation->set_rules('map', 'Harita Bilgisi', 'required|trim|xss_clean');

        if ($this->form_validation->run() != false) {

            $post_data->phone = $this->input->post('phone', true);
            $post_data->email = $this->input->post('email',true);
            $post_data->facebook = $this->input->post('facebook', true);
            $post_data->instagram = $this->input->post('instagram', true);
            $post_data->twitter = $this->input->post('twitter', true);
            $post_data->map = $this->input->post('map', true);
            $post_data->address = $this->input->post('address', true);
            $post_data->update_date = current_date();

            if ($this->model->update_contact($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Güncelleme Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    //İletişim Bilgileri Bitiş___________________________________________________________________


    public function seen_message()
    {
        $id = $this->input->post('id', true);

        if ($this->model->seen_message($id)) {
            $this->result->status = true;
        }
        $this->response();
    }

    public function remove_images()
    {

        $this->session->unset_userdata('images');

        $this->result->status = true;


        $this->response();
    }

    public function delete_message()
    {

        $id = $this->input->post('id', true);
        $table_name = 'messages';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function site_settings()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'ID', 'required|trim|max_length[250]|xss_clean|numeric');

        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Aydınlatma Metni', 'required|trim|xss_clean');


        if($_POST['id'] != 3) {
            $this->form_validation->set_rules('banner', 'Banner', 'required|trim|xss_clean');
        }


        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->site_title = $this->input->post('title', true);
            $post_data->site_description = $this->input->post('description',true);

            if($_POST['id'] != 3) {
                $post_data->banner = $this->input->post('banner',true);
                if($this->session->userdata('images')) {
                    $post_data->image_path = $this->session->userdata('images');
                    $post_data->image_path = $post_data->image_path[0];
                    $this->session->unset_userdata('images');
                }
            }

            if ($this->model->site_settings($post_data)) {
                $this->result->url = site_url('yonetim-paneli/site-ayarlari');
                $this->result->status = true;
            } else {
                $this->result->error = "Güncelleme Esnasında Bir Hata Oluştu Lütfen Tekrar Deneyin";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function homepage_update()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('about_title', 'Hakkımızda Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('about_description', 'Hakkımızda Metin', 'required|trim');
        $this->form_validation->set_rules('product_title', 'Ürünler Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('product_description', 'Ürünler Metin', 'required|max_length[250]');
        $this->form_validation->set_rules('gallery_title', 'Galeri Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('ticket_title', 'Etkiet Başlık', 'required|trim|max_length[250]|xss_clean');

        if($this->form_validation->run() != false) {
            $post_data->about_title = $this->input->post('about_title', true);
            $post_data->about_description = $this->input->post('about_description', false);
            $post_data->product_title = $this->input->post('product_title', true);
            $post_data->product_description = $this->input->post('product_description', false);
            $post_data->gallery_title = $this->input->post('gallery_title', true);
            $post_data->ticket_title = $this->input->post('ticket_title', true);
            $post_data->update_date = current_date();

            if($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if($this->model->homepage_update($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_ticket()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('title', 'Hakkımızda Başlık', 'required|trim|max_length[250]');

        if($this->form_validation->run() != false) {
            $post_data->title = $this->input->post('title', false);
            $post_data->id = $this->input->post('id', true);
            $post_data->update_date = current_date();

            if($this->session->userdata('images_svg')) {
                $post_data->image_path = $this->session->userdata('images_svg');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images_svg');
            }

            if($this->model->ticket_update($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_features()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Açıklama', 'required|trim|xss_clean');

        if($this->form_validation->run() != false) {
            $post_data->title = $this->input->post('title', true);
            $post_data->description = $this->input->post('description', true);
            $post_data->update_date = current_date();

            if($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if($this->model->features_update($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function add_gallery()
    {
        $post_data = new StdClass();

        $post_data->add_date = current_date();

        if ($this->session->userdata('images_all')) {

            $all_image_path = $this->session->userdata('images_all');
            $this->session->unset_userdata('images_all');

            foreach ($all_image_path as $key => $value) {
                $this->model->add_gallery($value, $post_data);
            };

            $this->result->status = true;

        } else {
            $this->result->error = "Lütfen Bir Resim Ekleyin.";
        }

        $this->response();
    }

    public function update_gallery()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->update_date = current_date();

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_gallery($post_data)) {
                $this->result->url = site_url('yonetim-paneli/galeri-listele');
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function gallery_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'gallery';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_gallery()
    {
        $id = $this->input->post('id', true);
        $table_name = 'gallery';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function update_about()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('sub_title', 'Alt Başlık', 'required|trim|xss_clean');
        $this->form_validation->set_rules('ticket_title', 'Etiket Başlık', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('description', 'Açıklama', 'required|trim');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->title = $this->input->post('title', true);
            $post_data->sub_title = $this->input->post('sub_title', true);
            $post_data->ticket_title = $this->input->post('ticket_title', true);
            $post_data->description = $this->input->post('description', false);
            $post_data->update_date = current_date();

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_about($post_data)) {
                $this->result->url = site_url('yonetim-paneli/galeri-listele');
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function add_certificate()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('title', 'Sertifika Adı', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {

            $post_data->title = $this->input->post('title', true);
            $post_data->add_date = current_date();

            if ($this->session->userdata('images')) {

                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');

                if ($this->model->add_certificate($post_data)) {
                    $this->result->url = site_url('yonetim-paneli/sertifika-listele');
                    $this->result->status = true;
                } else {
                    $this->result->error = "Sertifika Eklenirken Bir Hata Oluştu Lütfen Tekrar Deneyin.";
                }
            } else {
                $this->result->error = "Lütfen Bir Resim Ekleyin.";
            }
        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_certificate()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('title', 'Başlık', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->title = $this->input->post('title', true);

            if ($this->session->userdata('images')) {
                $post_data->image_path = $this->session->userdata('images');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images');
            }

            if ($this->model->update_certificate($post_data)) {
                $this->result->url = site_url('yonetim-paneli/sertifika-listele');
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function certificate_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'certificates';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_certifica()
    {

        $id = $this->input->post('id', true);
        $table_name = 'certificates';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function add_product()
    {
        $post_data = new StdClass();
        $images_data = new stdClass();

        $this->form_validation->set_rules('title', 'Ürün Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('cover_text', 'Kapak Metni', 'required|trim|max_length[250]');
        $this->form_validation->set_rules('description', 'Ürün Açıklama', 'required|trim');
        $this->form_validation->set_rules('storage', 'Saklama Koşulları', 'required|trim');
        $this->form_validation->set_rules('product_types', 'Ürün Çeşitleri Tablosu', 'trim');
        $this->form_validation->set_rules('site_title', 'Site Başlığı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('site_description', 'Site Açıklaması', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {

            $post_data->title = $this->input->post('title', true);
            $post_data->cover_text = $this->input->post('cover_text', false);
            $post_data->slug = url_seo($post_data->title);
            $post_data->description = $this->input->post('description', false);
            $post_data->storage = $this->input->post('storage', false);
            $post_data->product_types = $this->input->post('product_types', false);
            $post_data->site_title = $this->input->post('site_title', true);
            $post_data->site_description = $this->input->post('site_description', true);
            $post_data->add_date = current_date();

            if($insert_id = $this->model->add_product($post_data)) {

                if ($this->session->userdata('images_all')) {

                    $images_data->rol = 1;
                    $images_data->product = $insert_id;

                    if ($this->session->userdata('images_2_all')) {

                        $all_image_path = $this->session->userdata('images_all');
                        $this->session->unset_userdata('images_all');

                        foreach ($all_image_path as $key => $value) {
                            $this->model->add_product_images($value, $images_data);
                        };

                        $images_data->rol = 2;
                        $all_image_path = $this->session->userdata('images_2_all');
                        $this->session->unset_userdata('images_2_all');

                        foreach ($all_image_path as $key => $value) {
                            $this->model->add_product_images($value, $images_data);
                        };

                        $this->result->status = true;

                    } else {
                        $this->result->error = "Lütfen Yemek Resmi Ekleyin.";
                    }

                } else {
                    $this->result->error = "Lütfen Ürün Resmi Ekleyin.";
                }
            } else {
                $this->result->error = "Ürün Eklenirken Bir Hata Oluştu";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function update_product()
    {
        $post_data = new StdClass();
        $images_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('title', 'Ürün Adı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('cover_text', 'Ürün Adı', 'required|trim|max_length[250]');
        $this->form_validation->set_rules('description', 'Ürün Açıklama', 'required|trim');
        $this->form_validation->set_rules('storage', 'Saklama Koşulları', 'required|trim');
        $this->form_validation->set_rules('product_types', 'Ürün Çeşitleri Tablosu', 'trim');
        $this->form_validation->set_rules('site_title', 'Site Başlığı', 'required|trim|max_length[250]|xss_clean');
        $this->form_validation->set_rules('site_description', 'Site Açıklaması', 'required|trim|max_length[250]|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->title = $this->input->post('title', true);
            $post_data->cover_text = $this->input->post('cover_text', false);
            $post_data->slug = url_seo($post_data->title);
            $post_data->description = $this->input->post('description', false);
            $post_data->storage = $this->input->post('storage', false);
            $post_data->product_types = $this->input->post('product_types', false);
            $post_data->site_title = $this->input->post('site_title', true);
            $post_data->site_description = $this->input->post('site_description', true);
            $post_data->update_date = current_date();

            if($this->model->update_product($post_data)) {

                $this->result->status = true;

            } else {
                $this->result->error = "Ürün Eklenirken Bir Hata Oluştu";
            }

            if ($this->session->userdata('images_all')) {

                $all_image_path = $this->session->userdata('images_all');
                $images_data->rol = 1;
                $images_data->product = $post_data->id;
                $this->session->unset_userdata('images_all');

                foreach ($all_image_path as $key => $value) {
                    $this->model->add_product_images($value, $images_data);
                };

            }

            if ($this->session->userdata('images_2_all')) {

                $all_image_path = $this->session->userdata('images_2_all');
                $images_data->rol = 2;
                $images_data->product = $post_data->id;
                $this->session->unset_userdata('images_2_all');

                foreach ($all_image_path as $key => $value) {
                    $this->model->add_product_images($value, $images_data);
                };

            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function product_status_1()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $rol = 1;
        $table_name = 'images';
        if ($this->model->product_status_update($table_name, $id, $status, $rol)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function product_status_2()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $rol = 2;
        $table_name = 'images';
        if ($this->model->product_status_update($table_name, $id, $status, $rol)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_product_1()
    {
        $id = $this->input->post('id', true);
        $table_name = 'images';
        $rol = 1;

        if ($this->model->delete_image($id, $table_name, $rol)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_product_2()
    {

        $id = $this->input->post('id', true);
        $table_name = 'images';
        $rol = 2;
        if ($this->model->delete_image($id, $table_name, $rol)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function product_list_status()
    {
        $id = $this->input->post('id', true);
        $status = $this->input->post('status', true);
        $table_name = 'product';
        if ($this->model->status_update($table_name, $id, $status)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function delete_product()
    {
        $id = $this->input->post('id', true);
        $table_name = 'product';
        if ($this->model->delete($id, $table_name)) {
            $this->result->status = true;
        } else {
            $this->result->error = "İşlem Başarısız Tekrar Deneyin.";
        }
        $this->response();
    }

    public function update_icon()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);

            if ($this->session->userdata('images_svg')) {
                $post_data->image_path = $this->session->userdata('images_svg');
                $post_data->image_path = $post_data->image_path[0];
                $this->session->unset_userdata('images_svg');
            }

            if ($this->model->update_icon($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    public function update_lighting_text()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('lighting_text', 'Aydınlatma Metni', 'required|trim');
        $this->form_validation->set_rules('site_title', 'Site Başlığı', 'required|trim|xss_clean|max_length[250]');
        $this->form_validation->set_rules('site_description', 'Site Açıklaması', 'required|trim|xss_clean|max_length[250]');

        if ($this->form_validation->run() != false) {
            $post_data->id = 1;
            $post_data->description = $this->input->post('lighting_text', false);
            $post_data->site_title = $this->input->post('site_title', true);
            $post_data->site_description = $this->input->post('site_description', true);
            $post_data->update_date = current_date();

            if ($this->model->update_lighting_text($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Değişiklik Yapılmadı";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    public function item_order()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('new_order', 'Yeni Sıralama', 'required|trim|xss_clean|integer');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->position = $this->input->post('new_order', true);

            if ($this->model->new_order($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Tekrar Deneyiniz";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }

    public function item_order_2()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('new_order', 'Yeni Sıralama', 'required|trim|xss_clean|integer');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->position = $this->input->post('new_order', true);

            if ($this->model->new_order_images($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Tekrar Deneyiniz";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }


    public function item_order_gallery()
    {
        $post_data = new StdClass();

        $this->form_validation->set_rules('id', 'İd', 'required|numeric|min_length[1]|max_length[11]|trim|xss_clean');
        $this->form_validation->set_rules('new_order', 'Yeni Sıralama', 'required|trim|xss_clean|integer');

        if ($this->form_validation->run() != false) {
            $post_data->id = $this->input->post('id', true);
            $post_data->position = $this->input->post('new_order', true);

            if ($this->model->new_order_gallery($post_data)) {
                $this->result->status = true;
            } else {
                $this->result->error = "Tekrar Deneyiniz";
            }

        } else {
            $this->result->error = validation_errors();
        }
        $this->response();
    }



}