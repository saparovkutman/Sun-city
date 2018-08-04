<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RequestCatTwo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library('image_lib');
        $this->load->library('upload');
    }

    public function insert_cat_two() {

        $this->load->model('admin/RequestCatTwoModels');
        $this->RequestCatTwoModels->insert_cat_two();
//        header("location: http://kutman.kg/admin/catalogs_two");
    }

}