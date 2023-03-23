<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Videos extends CI_Controller {

     public function index()
    {
        $this->load->view('include/header');
         $this->load->view('Videos/video');
         $this->load->view('include/footer');
    }
}

?>