<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestCatTwo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');


    }

    public function insert_cat_two() {
        $config['upload_path']          = 'http://kutman.kg/uploads/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload');
        $this->upload->initialize($config);
        $name ="kartinka";
        print_r($_FILES);
        if ( ! $this->upload->do_upload($name))
        {
            echo 'errors';
        }
        else
        {
            $data = $this->upload->data();
            print_r($data);
        }
        die;
        $this->load->model('RequestCatTwoModels');
        $this->RequestCatTwoModels->insert_cat_two();
    }

}