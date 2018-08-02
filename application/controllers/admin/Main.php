<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('admin/header/header.php');
	}
	public function index()
	{
		$this->load->view('admin/index');
		$this->load->view('admin/footer/footer.php');
	}
	public function reserve()
	{
		$this->load->view('admin/reserve');
		$this->load->view('admin/footer/footer.php');
	}
	public function reserve_view()
	{
		$this->load->view('reserve_view');
	}
	public function users()
	{
		$this->load->view('admin/users');
		$this->load->view('admin/footer/footer.php');
	}
	public function catalogs()
	{
		$this->load->view('catalogs');
	}
    public function catalogs_view()
	{
		$this->load->view('sdd');
	}
<<<<<<< HEAD
    public function cataloaagaASDASs_view()
	{
		$this->load->view('ASDSADSA');
=======
	public function bekaa()
	{
			$this->load->view('sabyrov');
>>>>>>> a83110c34974521e2087b4ba85d484bf40e08d22
	}
}
