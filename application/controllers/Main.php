<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('main/header/header.php');
	}

//========================== INDEX ==========================//
	public function index()
	{
		$this->load->view('main/main');
		$this->load->view('main/footer/footer.php');
	}
    public function subcategory_one()
	{
		$this->load->view('main/subcategory_one');
		$this->load->view('main/footer/footer.php');
	}
    public function subcategory_two()
	{
		$this->load->view('main/subcategory_two');
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_package_subcattwo()
	{
		$this->load->view('main/package_form');
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_restaurant_subcattwo()
	{
		$this->load->view('main/restaurants_form');
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_tichet_subcattwo()
	{
		$this->load->view('main/tichet_form');
		$this->load->view('main/footer/footer.php');
	}
    
    public function subcategory_three()
	{
		$this->load->view('main/subcategory_three');
		$this->load->view('main/footer/footer.php');
	}
     public function reserve_form_subcattree()
	{
		$this->load->view('main/reserve_form_cattree');
		$this->load->view('main/footer/footer.php');
	}
    public function subcategory_two_view($id)
	{
        echo $id;
        if($id==1){
            $this->load->view('main/package');
        }
		elseif($id==2){
            $this->load->view('main/transportation');
        }
        elseif($id==3){
            $this->load->view('main/restaurants');
        }
        elseif($id==4){
            $this->load->view('main/tichet');
        }
		$this->load->view('main/footer/footer.php');
	}
}
