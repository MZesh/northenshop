<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Shipping extends CI_Controller {
    
    public function index()
    {
        $this->load->view('include/header');
         $this->load->view('Shipping/shipping');
         $this->load->view('include/footer');
    }
    
}

?>