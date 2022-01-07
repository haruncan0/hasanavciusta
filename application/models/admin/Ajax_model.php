<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax_model extends CI_Model
{

    public function login($password, $username)
    {
        $this->db->from("admin");
        $this->db->where(['user_name' => $username]);
        $return_query = $this->db->get();
        if ($return_query->num_rows() > 0) {

            $admininfo = $return_query->row();
            if (password_verify($password, $admininfo->password)) {
                $this->session->set_userdata('admin_info', $admininfo);
                return true;
            } else {
                return false;
            }
        }
    }

    public function update_account_genaral($post_data, $id)
    {
        $this->db->set($post_data)->where(['id' => $id])->update('admin');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_account_pass($post_data, $id)
    {
        $this->db->set($post_data)->where(['id' => $id])->update('admin');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Slider başlangıç______________________________________________________________________________
    public function add_slider($post_data)
    {
        $this->db->set($post_data)->insert('slider');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_slider($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('slider');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    // Slider bitiş______________________________________________________________________________


    // İleitşim Bilgileri Başlangıç________________________________________________________________________________

    public function update_contact($post_data)
    {
        $this->db->set($post_data)->update('contact');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    // İletişim Bilgileri Bitiş____________________________________________________________________________________


    public function status_update($table_name,$id, $status)
    {
        $this->db->set(['status' => $status])->where(['id' => $id])->update($table_name);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function product_status_update($table_name,$id, $status, $rol)
    {
        $this->db->set(['status' => $status])->where(['id' => $id, 'rol' => $rol])->update($table_name);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id,$table_name)
    {
        $this->db->set(['deleted' => 1])->where(['id' => $id])->update($table_name);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_image($id,$table_name,$rol)
    {
        $this->db->set(['deleted' => 1])->where(['id' => $id, 'rol' => $rol])->update($table_name);
        if ($this->db->affected_rows() > 0) {
            return true;        
        } else {
            return false;
        }
    }

    public function seen_message($id)
    {
        $this->db->set(['seen' => 1])->where(['id' => $id])->update('messages');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;

        }
    }

    public function site_settings($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('site_settings');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function homepage_update($post_data)
    {
        $this->db->set($post_data)->update('homepage');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function ticket_update($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('ticket');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function features_update($post_data)
    {
        $this->db->set($post_data)->update('features');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add_gallery($value, $post_data)
    {
        $this->db->set(['image_path' => $value, 'add_date' => $post_data->add_date])->insert('gallery');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_gallery($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('gallery');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_about($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('about');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function add_certificate($post_data)
    {
        $this->db->set($post_data)->insert('certificates');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_certificate($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('certificates');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function add_product_images($val,$data)
    {
        $this->db->set(['product' => $data->product, 'rol' => $data->rol, 'image_path' => $val])->insert('images');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function add_product($post_data)
    {
        $this->db->from('product');
        $this->db->where(['slug' => $post_data->slug]);
        $return_query = $this->db->get();
        if($return_query->num_rows() > 0) {

            $this->db->set($post_data)->insert('product');
            if($this->db->affected_rows() > 0) {
                $insert_id = $this->db->insert_id();
                $this->db->set(['slug' => $post_data->slug . '-' . $insert_id])->where(['id' => $insert_id])->update('product');
                if ($this->db->affected_rows() > 0) {
                    return $insert_id;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $this->db->set($post_data)->insert('product');
            if ($this->db->affected_rows() > 0) {
                $insert_id = $this->db->insert_id();
                return $insert_id;
            }else {
                return false;
            }
        }
    }

    public function update_product($post_data)
    {
        $this->db->select('id,slug');
        $this->db->from('product');
        $this->db->where(['slug' => $post_data->slug]);
        $this->db->where(['id !=' => $post_data->id]);

        $return_query = $this->db->get();

        if($return_query->num_rows() > 0) {

            $this->db->set($post_data)->where(['id' => $post_data->id])->update('product');
            if($this->db->affected_rows() > 0) {
                $this->db->set(['slug' =>$post_data->slug . '-' . $post_data->id])->where(['id' => $post_data->id])->update('product');
                if($this->db->affected_rows() > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }

        } else {
            $this->db->set($post_data)->where(['id' => $post_data->id])->update('product');
            if ($this->db->affected_rows() > 0) {
                return true;
            }else {
                return false;
            }
        }
    }


    public function update_icon($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('icons');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function update_lighting_text($post_data)
    {
        $this->db->set($post_data)->where(['id' => $post_data->id])->update('contracts');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function new_order($post_data)
    {
        $this->db->set(['position' => $post_data->position])->where(['id' => $post_data->id])->update('product');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function new_order_images($post_data)
    {
        $this->db->set(['position' => $post_data->position])->where(['id' => $post_data->id])->update('images');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }

    public function new_order_gallery($post_data)
    {
        $this->db->set(['position' => $post_data->position])->where(['id' => $post_data->id])->update('gallery');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else {
            return false;
        }
    }


}