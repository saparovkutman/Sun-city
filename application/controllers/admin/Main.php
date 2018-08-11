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
        $this->load->library('authit');
		$this->load->helper('authit');
		$this->config->load('authit');
        if (!logged_in()) redirect('admin/login');
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
<<<<<<< HEAD
    
    
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

=======
>>>>>>> 7e5d846ba75820a9eb3fcb57480aeccb25575b87

//========================= CATALOG TWO ==========================//
    //insert
	public function catalogs_two()
    {
        $this->load->model('admin/MainModels');
        $result = $this->MainModels->get_cat_two();
        $data = array(
            "data" => $result
        );
        $this->load->view('admin/catalogs_two', $data);
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
<<<<<<< HEAD
=======


=======
>>>>>>> 69177ec578cf047343fdd2bfa476eb9622220f0c
>>>>>>> 40b825f4b802e91c82a5a2753f93596d845e71eb

//========================= SUBCATALOGS THREE ==========================//
    //insert
    public function podcatalog_three($id)
    {
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_podcatalog_three($id);
<<<<<<< HEAD
=======
<<<<<<< HEAD
    }

    //update
    public function edit_cat_three(){
        $result = $this->MainModels->get_id_three();
=======
<<<<<<< HEAD

=======
        $data = array(
            "data" => $result,
            'cat_id'=>$id
        );
        $this->load->view('admin/podcatalog_three', $data);
        $this->load->view('admin/footer/footer.php');
    }
    //update
    public function edit_cat_three($id){
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_id_three($id);
>>>>>>> 69177ec578cf047343fdd2bfa476eb9622220f0c
>>>>>>> 7e5d846ba75820a9eb3fcb57480aeccb25575b87
>>>>>>> 40b825f4b802e91c82a5a2753f93596d845e71eb
        $data = array(
            "data" => $result,
            'cat_id'=>$id
        );
        $this->load->view('admin/podcatalog_three', $data);
        $this->load->view('admin/footer/footer.php');
    }


//========================= RESERVE ==========================//
	public function reserve()
	{
		$this->load->view('admin/reserve');
		$this->load->view('admin/footer/footer.php');
	}

//========================= VIP_BOOKING_SERVICES ==========================//
	public function reserve_vip()
	{
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_vip();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/reserve_vip', $data);
		$this->load->view('admin/footer/footer.php');
	}

//========================= RESTAURANT ==========================//
	public function reserve_kitchen()
	{
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_kitchen();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/reserve_kitchen', $data);
		$this->load->view('admin/footer/footer.php');
	}

//========================= SHOW ==========================//
	public function reserve_show()
	{
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_show();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/reserve_show', $data);
		$this->load->view('admin/footer/footer.php');
	}

//========================= TRANSPORTATION SERVICES ==========================//
	public function reserve_search_car()
	{
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_transport();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/reserve_search_car', $data);
		$this->load->view('admin/footer/footer.php');
	}

//========================= BOOKING PACKAGE (CHIP) ==========================//
	public function reserve_chip()
	{
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_chip();
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/reserve_chip', $data);
		$this->load->view('admin/footer/footer.php');
	}

//========================= ACCOMMODATION PACKAGE ==========================//
    public function accommodation()
    {
        $this->load->model('admin/mainmodels');
        $result = $this->mainmodels->get_accommodation();
        $data = array(
            "data" => $result
        );
        $this->load->view('admin/accommodation_package', $data);
        $this->load->view('admin/footer/footer.php');
    }


    public function users()
	{
		$this->load->view('admin/users');
		$this->load->view('admin/footer/footer.php');
	}

	public function profile()
	{
//        
        $user_id = user('id');
        $result = $this->MainModels->profile($user_id);
        $data = array(
            "data" => $result
        );
		$this->load->view('admin/profile', $data);
		$this->load->view('admin/footer/footer.php');
	}

	public function catalogs()
	{
		$this->load->view('catalogs');
	}
	// // для каталог 2 . тут услуги
	// public function podcatalogs($id)
	// {
	//     $result = $this->MainModels->get_services();
	//      $data = array(
 //            "data" => $result
 //        );
	// 	$this->load->view('admin/podcatalogs_two',$data);
	// 	$this->load->view('admin/footer/footer.php');
	// }
}
