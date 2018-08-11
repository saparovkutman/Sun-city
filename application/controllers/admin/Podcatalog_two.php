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
		$this->load->model('admin/Podcatalog_two_models');
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

	public function insert_uslugi()
	{
        $this->Podcatalog_two_models->insert_podcat_two();
	}
	public function update_cat(){
		$this->Podcatalog_two_models->update_podcat_two();
	}
	public function delete_cat_two()
	{
       $this->Podcatalog_two_models->delete_cat_two();
	}
//	restaurants
    public function update_restaurants(){
        $this->Podcatalog_two_models->update_restaurants();
    }
    public function add_restaurants(){
        $this->Podcatalog_two_models->add_restaurants();
    }
    public function delete_res(){
        $this->Podcatalog_two_models->delete_res();
    }
// переходы
	public function add_services($id)
	{
        if ($id == 1) {
        	$data['data'] = $this->Podcatalog_two_models->get_restaurants(); 
        	$this->load->view('admin/services/services_restaurants.php',$data);
        }
        elseif ($id == 3){
            $data['data'] = $this->Podcatalog_two_models->get_show();
            $this->load->view('admin/services/services_show.php',$data);
        }

        elseif ($id == 4){
            $data['data'] = $this->Podcatalog_two_models->get_book();
            $this->load->view('admin/services/services_book.php',$data);
        }
	}
// show
	public function add_show(){
        $this->Podcatalog_two_models->add_show();
    }
    public function update_show(){
        $this->Podcatalog_two_models->update_show();
    }
    public function delete_show(){
        $this->Podcatalog_two_models->delete_show();
    }
//    travel packts
    public function add_book(){
    $this->Podcatalog_two_models->add_book();
    }
    public function update_book(){
	    $this->Podcatalog_two_models->update_book();
    }
    public function delete_book(){
        $this->Podcatalog_two_models->delete_book();
    }

}