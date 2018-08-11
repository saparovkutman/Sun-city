<?php
class Podcatalog_two_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('image_lib');
    }

//========================= FILE UPLOAD ==========================//
    private function image()
    {
        //images
        $config['upload_path'] = './assets/upload/images/cat_two';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->upload->initialize($config);
        
        
        if ( !$this->upload->do_upload('img_add'))
        {
            $file_name = "";
        }
        else
        {
            $image_data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_data['full_path'];
            $config['new_image'] = APPPATH . '../assets/upload/thumb/cat_two';
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 50;
            $config['height'] = 50;

            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $name = $this->upload->data();
            $file_name = $name['file_name'];
        }
        return $file_name;
    }

//========================= podcatalog two ==========================//
//insert
    public function insert_podcat_two()
    {
        $title = $this->input->post('title', true);
        $description = $this->input->post('content', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $description,
            "img_name" => $img
        );
        $this->db->insert('sub_category_two', $data);
    }

    //update
    public function update_podcat_two()
    {
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $img_name = $this->input->post('img_name',true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();
        if ($img == "") {
            $data = array(
                'title' => $title,
                'description' => $content,
                'id' => $id_cat
            );
        }
        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'img_name' => $img,
                'id' => $id_cat
            );

            if($img_name){
                unlink('assets/upload/images/cat_two/' . $img_name);
                unlink('assets/upload/thumb/cat_two/' . $img_name);
            }
        }
        $this->db->where('id', $id_cat);
        $this->db->update('sub_category_two', $data);
    }

    //delete
    public function delete_cat_two()
    {
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/' . $cat_img);
        unlink('assets/upload/thumb/cat_two/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('sub_category_two');
    }

    // get bronirovanie restorana
    public function get_restaurants(){
       $select = $this->db->get('services_restaurants');
        return $select->result();
    }
   // update_restaurants
    public function update_restaurants(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $img_name = $this->input->post('old_img',true);
        $id_cat = $this->input->post('id', true);
        $date = $this->input->post('date_time', true);
        $img = $this->image();
        if ($img == "") {
            $data = array(
                'title' => $title,
                'description' => $content,
                'date_time' => $date
            );
        }
        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'date_time' => $date,
                'img_name' => $img
            );

            if($img_name){
                unlink('assets/upload/images/cat_two/' . $img_name);
                unlink('assets/upload/thumb/cat_two/' . $img_name);
            }
        }
        $this->db->where('id', $id_cat);
        $this->db->update('services_restaurants', $data);
    }
   //   add_restaurants
    public function add_restaurants(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $add_time = $this->input->post('add_time', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "date_time" => $add_time,
            "img_name" => $img
        );
        $this->db->insert('services_restaurants', $data);
    }
  //    delete_restorana
    public function delete_res(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/' . $cat_img);
        unlink('assets/upload/thumb/cat_two/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('services_restaurants');
    }

//    show
    public function get_show(){
        $select = $this->db->get('services_tickets_show');
        return $select->result();
    }

    public function add_show(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $add_time = $this->input->post('add_time', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "date_time" => $add_time,
            "img_name" => $img
        );
        $this->db->insert('services_tickets_show', $data);
    }

    public function update_show(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $img_name = $this->input->post('old_img',true);
        $id_cat = $this->input->post('id', true);
        $date = $this->input->post('date_time', true);
        $img = $this->image();
        if ($img == "") {
            $data = array(
                'title' => $title,
                'description' => $content,
                'date_time' => $date
            );
        }
        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'date_time' => $date,
                'img_name' => $img
            );

            if($img_name){
                unlink('assets/upload/images/cat_two/' . $img_name);
                unlink('assets/upload/thumb/cat_two/' . $img_name);
            }
        }
        $this->db->where('id', $id_cat);
        $this->db->update('services_tickets_show', $data);
    }

    public function delete_show(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/' . $cat_img);
        unlink('assets/upload/thumb/cat_two/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('services_tickets_show');
    }
    // travel packets
    public function get_book(){
    $select = $this->db->get('services_book');
    return $select->result();
   }

    public function add_book(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $img = $this->image();
        $data = array(
            "title" => $title,
            "description" => $content,
            "img_name" => $img
        );
        $this->db->insert('services_book', $data);
    }
    public function update_book(){
        $title = $this->input->post('title', true);
        $content = $this->input->post('content', true);
        $img_name = $this->input->post('old_img',true);
        $id_cat = $this->input->post('id', true);
        $img = $this->image();
        if ($img == "") {
            $data = array(
                'title' => $title,
                'description' => $content,
            );
        }
        else {
            $data = array(
                'title' => $title,
                'description' => $content,
                'img_name' => $img
            );

            if($img_name){
                unlink('assets/upload/images/cat_two/' . $img_name);
                unlink('assets/upload/thumb/cat_two/' . $img_name);
            }
        }
        $this->db->where('id', $id_cat);
        $this->db->update('services_book', $data);
    }
    public function delete_book(){
        $id_cat_one = $this->input->post('id', true);
        $cat_img = $this->input->post('img', true);
        unlink('assets/upload/images/cat_two/' . $cat_img);
        unlink('assets/upload/thumb/cat_two/' . $cat_img);
        $this->db->where('id', $id_cat_one);
        $this->db->delete('services_book');
    }



}