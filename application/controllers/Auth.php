<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

    public function __contstruct()
    { 
        $this->load->library('form_validation');
    }
    
    public function Login()
    {
        if(isset($_POST['login']))
        {
            
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('pass','Password','required');
            
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            
            if($this->form_validation->run() == TRUE)
                {
                  $this->db->select("*");
                 $this->db->from('user');
                 $this->db->where(array('email'=>$email,'password'=>$pass));
                 $query = $this->db->get();

			     $user = $query->row();
                
                 if($user->email){
				 $this->session->set_flashdata('success',"Your have logged in");
				 $_SESSION['user_logged'] = TRUE;
				 $_SESSION['email'] = $user->email; 
				 redirect('Shopping/Full','refresh');
			 }else{
				 $this->session->set_flashdata('error',"User not exists");
				 redirect('auth/login','refresh');
 
			 }
                }
        }
        $this->load->view('include/header');
         $this->load->view('Auth/login');
         $this->load->view('include/footer');
    }
    public function Register()
    {
        if(isset($_POST['register']))
        {
            
            $this->form_validation->set_rules('fname','First Name','required');
            $this->form_validation->set_rules('lname','Last Name','required');
            $this->form_validation->set_rules('country','Country','required');
            $this->form_validation->set_rules('street','Street','required');
            $this->form_validation->set_rules('aprt','Apartment','required');
            $this->form_validation->set_rules('city','City','required');
            $this->form_validation->set_rules('zip','Zip','required');
            $this->form_validation->set_rules('phone','Phone','required');
             $this->form_validation->set_rules('email','Email','required');
             $this->form_validation->set_rules('pass','Password','required');    
            
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $country = $this->input->post('country');
            $street = $this->input->post('street');
            $aprt = $this->input->post('aprt');
            $city = $this->input->post('city');
            $zip = $this->input->post('zip');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $pass = $this->input->post('pass');
            
            
             if($this->form_validation->run() == TRUE)
                {
                 $data = array(
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'province'=>$country,
                    'address'=>$street,
                     'apartment'=>$aprt,
                     'town'=>$city,
                     'postal'=>$zip,
                     'email'=>$email,
                     'password'=>$pass,
                     'contact'=>$phone,
                    );
                 $result= $this->db->insert('user',$data); 
                $this->session->set_flashdata('success',"Register Successfully.");
                }
                 
            } 
        
        $this->load->view('include/header');
         $this->load->view('Auth/register');
         $this->load->view('include/footer');//register
    }
     public function Logout()
    {
         $this->session->sess_destroy();
		 redirect('Auth/login','refresh');
    }
}

?>