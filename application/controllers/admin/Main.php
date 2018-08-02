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
	public function catalogs_one()
	{
		$this->load->view('admin/catalogs_one');
		$this->load->view('admin/footer/footer.php');
	}
	public function catalogs_two()
	{
		$this->load->view('admin/catalogs_two');
		$this->load->view('admin/footer/footer.php');
	}
	public function catalogs_three()
	{
		$this->load->view('admin/catalogs_three');
		$this->load->view('admin/footer/footer.php');
	}
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
	public function catalogs()
	{
		$this->load->view('catalogs');
	}
	public function podcatalogs()
	{
		$this->load->view('admin/podcatalogs');
		$this->load->view('admin/footer/footer.php');
	}
}
