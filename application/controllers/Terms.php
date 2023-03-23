<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Terms extends CI_Controller {
    
    public function index()
    {
        $this->load->view('include/header');
         $this->load->view('Terms/terms');
         $this->load->view('include/footer');
    }
    
    public function policy()
    {
        $this->load->view('include/header');
         $this->load->view('Terms/privacy');
         $this->load->view('include/footer');
    }
}

?>