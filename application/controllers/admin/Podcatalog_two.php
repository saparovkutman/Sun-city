<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Podcatalog_two extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('admin/MainModels');
		$this->load->view('admin/header/header.php');
	}

	// для каталог 2 . тут услуги
	public function uslugi()
	{
	    $result = $this->MainModels->get_services();
	     $data = array(
            "data" => $result
        );
		$this->load->view('admin/podcatalogs_two',$data);
		$this->load->view('admin/footer/footer.php');
	}


}