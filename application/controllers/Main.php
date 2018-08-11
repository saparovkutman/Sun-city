<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
        $this->load->library('authitalluser');
		$this->load->helper('authit');
		$this->config->load('authit');
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
        $data['cat_id'] = $this->input->get('id');
		$this->load->view('main/subcategory_one',$data);
		$this->load->view('main/footer/footer.php');
	}
    public function subcategory_two()
	{
		$this->load->view('main/subcategory_two');
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_package_subcattwo()
	{
        $data['id'] = $this->input->get('id');
		$this->load->view('main/package_form', $data);
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_restaurant_subcattwo()
	{
        $data['id'] = $this->input->get('id');
		$this->load->view('main/restaurants_form',$data);
		$this->load->view('main/footer/footer.php');
	}
    public function reserve_form_tichet_subcattwo()
	{
        $data['id'] = $this->input->get('id');
		$this->load->view('main/tichet_form', $data);
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
        if($id==1){
            $data['id']=$id;
            $this->load->view('main/package', $data);
        }
		elseif($id==2){
            $data['id']=$id;
            $this->load->view('main/transportation', $data);
        }
        elseif($id==3){
            $data['id']=$id;
            $this->load->view('main/restaurants',$data);
        }
        elseif($id==4){
            $data['id']=$id;
            $this->load->view('main/tichet', $data);
        }
		$this->load->view('main/footer/footer.php');
	}
}
