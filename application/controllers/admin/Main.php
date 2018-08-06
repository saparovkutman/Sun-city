<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('admin/MainModels');
		$this->load->view('admin/header/header.php');

	}

//========================== INDEX ==========================//
	public function index()
	{
		$this->load->view('admin/index');
		$this->load->view('admin/footer/footer.php');
		}
//========================= CATALOG ONE ==========================//
    //insert
	public function catalogs_one()
	{
        $this->load->model('admin/MainModels');
        $result = $this->MainModels->get_cat_one();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/catalogs_one', $data);
		$this->load->view('admin/footer/footer.php');
	}
    //update
    public function edit_cat_one(){
        $this->load->model('admin/MainModels');
        $result = $this->MainModels->get_id_one();
        $data = array(
            "data" => $result
        );
        $this->load->view('admin/catalogs_one',$data);
        $this->load->view('admin/footer/footer.php');

    }
//========================= CATALOG TWO ==========================//
    //insert
	public function catalogs_two()
	{
        $this->load->model('admin/MainModels');
        $result = $this->MainModels->get_cat_two();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/catalogs_two',$data);
		$this->load->view('admin/footer/footer.php');
	}
	//update
    public function edit_cat_two(){
        $this->load->model('admin/MainModels');
        $result = $this->MainModels->get_id_two();
        $data = array(
            "data" => $result
        );
        $this->load->view('admin/catalogs_two',$data);
        $this->load->view('admin/footer/footer.php');

    }

//========================= CATALOG THREE ==========================//
    //insert
    public function catalogs_three()
	{
        $this->load->model('admin/MainModels');
        $result = $this->MainModels->get_cat_three();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/catalogs_three', $data);
		$this->load->view('admin/footer/footer.php');
	}
    //update
    public function edit_cat_three(){
        $result = $this->MainModels->get_id_three();
        $data = array(
            "data" => $result
        );
        $this->load->view('admin/catalogs_three',$data);
        $this->load->view('admin/footer/footer.php');

    }

//========================= RESERVE ==========================//
	public function reserve()
	{
		$this->load->view('admin/reserve');
		$this->load->view('admin/footer/footer.php');
	}
	public function reserve_vip()
	{
		$this->load->view('admin/reserve_vip');
		$this->load->view('admin/footer/footer.php');
	}
	public function reserve_kitchen()
	{
		$this->load->view('admin/reserve_kitchen');
		$this->load->view('admin/footer/footer.php');
	}
	public function reserve_show()
	{
		$this->load->view('admin/reserve_show');
		$this->load->view('admin/footer/footer.php');
	}
	public function reserve_search_car()
	{
		$this->load->view('admin/reserve_search_car');
		$this->load->view('admin/footer/footer.php');
	}
	public function reserve_chip()
	{
		$this->load->view('admin/reserve_chip');
		$this->load->view('admin/footer/footer.php');
	}
	public function users()
	{
		$this->load->view('admin/users');
		$this->load->view('admin/footer/footer.php');
	}
	public function profile()
	{
		$this->load->view('admin/profile');
		$this->load->view('admin/footer/footer.php');
	}

	public function catalogs()
	{
		$this->load->view('catalogs');
	}
	public function podcatalogs($id)
	{
	    $result = $this->MainModels->get_services($id);
	     $data = array(
            "data" => $result
        );
		$this->load->view('admin/podcatalogs',$data);
		$this->load->view('admin/footer/footer.php');
	}
}
