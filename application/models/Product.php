<?php

class Product extends CI_Model
{
    public function __construct()
    {
       // $this->load->db('eshopping');
    }
   
    public function InsertIntoTable($data)
    {
     return $this->db->insert('products', $data);
      
    }
}
?>