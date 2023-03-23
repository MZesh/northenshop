<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
    
    public function index()
    {
        $this->load->view('include/header');
         $this->load->view('Blog/blog');
         $this->load->view('include/footer');
    }
    public function single()
    {
         if(isset($_POST['comment']))
        {
            
             $this->form_validation->set_rules('name','Name','required|min_length[5]');
             $this->form_validation->set_rules('email','Email','required');
             $this->form_validation->set_rules('url','Url','required');
             $this->form_validation->set_rules('message','Message','required'); 
            
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $sub = $this->input->post('url');
            $mess = $this->input->post('message');
            
            if($this->form_validation->run() == TRUE)
			{
             $data = array(
                'name'=>$name,
                'email'=>$email,
				'website'=>$sub,
				'message'=>$mess,
                );
             $result= $this->db->insert('comment',$data); 
            $this->session->set_flashdata('success',"Your message has been sent.");
            }
            else{
                $this->session->set_flashdata('error',"Your message has not been sent.");
            }
        }
        $this->load->view('include/header');
         $this->load->view('Blog/single');
         $this->load->view('include/footer');
         $this->load->view('include/quantity');
    }
    public function Category()
    {
         $this->load->view('include/header');
         $this->load->view('Blog/blogCat');
         $this->load->view('include/footer');
    }
    
             
}

?>