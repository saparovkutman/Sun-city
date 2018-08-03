<?php
class RequestCatTwoModels extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
//        $this->load->library('image_lib');
    }
    private function image(){
        $config['upload_path'] = './upload/images';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->load->library('upload', $config);
//        $this->upload->initialize($config);
        $this->upload->do_upload();
//        $image_data = $this->upload->data();


        //watermark
        $name = $this->upload->data();
        $img = $name['file_name'];
        return $img;
    }
    public function insert_cat_two() {


        $title = $this->input->post('zagolovok');
        $description = $this->input->post('opisanie');
        print_r($_FILES);
//        $image_name = $this->image();

        $data = array(
//            'order_json' => $order_json,
            'title' => $title,
            'description' => $description,
//            'image_name' => $image_name
        );
        print_r($data);
        die;
        $this->db->insert('category_two', $data);
        echo $data ;
        print_r($data);
    }
//    public function insert_cat_two()
//    {
//        $insert = $this->input->post('zagolovok','opisanie','image', true);
//        $data = array('title','description','image_name'=>$insert);
//        $escape_data = $this->db->escape($data);
//        $this->db->insert('category_two', $escape_data);
//    }
//    public function update_cat_two()
//    {
//        $update = $this->input->post('update', true);
//        $id_cat_two = $this->input->post('id_car', true);
//        $data = array('title','description','image_name' => $update);
//        $escape_data = $this->db->escape($data);
//        $this->db->where('id', $id_cat_two);
//        $this->db->update('category_two', $escape_data);
//    }
//    public function delete_cat_two()
//    {
//        $id_cat_two = $this->input->get('id_cat_two', true);
//        $this->db->where('id',$id_cat_two);
//        $this->db->delete('category_two');
//    }
}