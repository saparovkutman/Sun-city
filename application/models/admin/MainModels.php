<?php
class MainModels extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

//========================= CATALOG ONE ==========================//
    public function get_cat_one()
    {
        $select = $this->db->get('category_one');
        $cat_one = $select->result();
        return $cat_one;
    }

//========================= CATALOG TWO ==========================//
    public function get_cat_two()
    {
        
             $select = $this->db->get('category_two');
             $cat_two = $select->result();
             return $cat_two;
    }

//========================= CATALOG THREE ==========================//
    public function get_cat_three()
    {
        $select = $this->db->get('category_three');
        $cat_three = $select->result();
        return $cat_three;
    }

// get services
public function get_services($id){
          $this->db->where('category_id',$id);
          $select = $this->db->get('sub_category_two');
          $cat_three = $select->result();
          return $cat_three;
}










}
