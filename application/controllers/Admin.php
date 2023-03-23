<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public function __contstruct()
    {
        $this->load->model('product');
        $this->load->library('form_validation');
    }
    
    public function Auth()
    {
        if(isset($_POST['loginAdmin']))
        {
            
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('password','Password','required');
            
            $name = $this->input->post('name');
            $pass = $this->input->post('password');
            
            if($this->form_validation->run() == TRUE)
                {
                  $this->db->select("*");
                 $this->db->from('admin');
                 $this->db->where(array('username'=>$name,'password'=>$pass));
                 $query = $this->db->get();

			     $user = $query->row();
                
                 if($user->username){
				 $this->session->set_flashdata('success',"Your have logged in");
				 $_SESSION['user_logged'] = TRUE;
				 $_SESSION['username'] = $user->username; 
				 redirect('Admin/Task','refresh');
			 } 
                }
        }
         $this->load->view('Admin/include/head');
         $this->load->view('Admin/Task/login'); 
    }
	 
	public function Task()
	{
		 $this->load->view('Admin/include/header');
         $this->load->view('Admin/Task/index'); 
	}
    public function Slider()
	{
         if(isset($_POST['uploadimg']))
        {
             $this->form_validation->set_rules('about','About','required');
             $this->form_validation->set_rules('desc','DESC','required'); 
             
            $url = $this->input->post('about');
            $desc = $this->input->post('desc');
             
          $config['upload_path'] = '././Upload/Slider/Images/'; 
          $config['max_size'] = '500000';
          $this->load->library('upload',$config);
             
          $post_image = $_FILES['imageslide']['name'];
           move_uploaded_file($_FILES['imageslide']['tmp_name'],'././Upload/Slider/Images/'.$_FILES['imageslide']['name']);
             
         if($this->form_validation->run() == TRUE)
         {
             $data = array(
				'image'=>$post_image,
				'about'=>$url,
				'descr'=>$desc,	
				 
				);
             $this->db->insert('slider',$data);
             $this->session->set_flashdata('success',"Successfully Uploaded...");
         } 
        }
		 $this->load->view('Admin/include/header');
         $this->load->view('Admin/Task/slider'); 
	}
    public function Upload()
    {
        $cnt = "";
        if(isset($_POST['upload']))
        {
             $this->form_validation->set_rules('name','Name','required|min_length[5]');
             $this->form_validation->set_rules('price','Price','required');
             $this->form_validation->set_rules('invoice','Invoice','required|is_unique[products.invoice]'); 
             $this->form_validation->set_rules('cat','Category','required');
             $this->form_validation->set_rules('qty','Quantity','required');
            
            
            $name = $this->input->post('name');
            $price = $this->input->post('price');
            $sp = "";
            $sale="";
            $cat = $this->input->post('cat');
            $qty = $this->input->post('qty');
            $sale = $this->input->post('sale');
            $desc = $this->input->post('desc');
            $invoice = $this->input->post('invoice');
            if($sale == "yes")
            {
                $sp = $this->input->post('sprice');
                $sale="yes";
            }else{
                $sp = "0";
                $sale="no";
            }
            
           
            $data = [];
            
             if($this->form_validation->run() == TRUE)
			{
             $count = count($_FILES['imageprd']['name']);
            $cnt = $count;
            for($i=0; $i<$count;$i++){
                   if(!empty($_FILES['imageprd']['name'][$i])){
                         $_FILES['img']['name'] = $_FILES['imageprd']['name'][$i];

                          $_FILES['img']['type'] = $_FILES['imageprd']['type'][$i];

                          $_FILES['img']['tmp_name'] = $_FILES['imageprd']['tmp_name'][$i];

                          $_FILES['img']['error'] = $_FILES['imageprd']['error'][$i];

                          $_FILES['img']['size'] = $_FILES['imageprd']['size'][$i];

                          

                          $config['upload_path'] = '././Upload/Products/Images/'; 

                          $config['allowed_types'] = 'jpg|jpeg|png|gif';

                          $config['max_size'] = '5000';

                          $config['file_name'] = $_FILES['imageprd']['name'][$i];
                       
                          $this->load->library('upload',$config); 
                           if($this->upload->do_upload('img')){

                            $uploadData = $this->upload->data();

                            $filename = $uploadData['file_name'];



                            $data['totalFiles'][] = $filename; 
                              
                              
                          }
                   }
                  
            }
          
             $add = array(
                'invoice'=>$invoice,
                'p_name'=>$name,
				'p_price'=>$price,
				'p_sPrice'=>$sp,
				'p_image1'=>$data['totalFiles'][0],
				'p_image2'=>$data['totalFiles'][1],
                'p_image3'=>$data['totalFiles'][2],
                'p_image4'=>$data['totalFiles'][3],
                
                    
                );
            
            $result= $this->db->insert('products',$add); 
            $addDetail = array(
             'p_id'=>$this->db->insert_id(),
             'p_category'=>$cat,
             'p_quantity'=>$qty,
             'IsSale'=>$sale,
             'p_desc'=>$desc,
             
            );
              $this->db->insert('prd_details',$addDetail); 
             }
            
        }
        
        $this->load->view('Admin/include/header');
        $this->load->view('Admin/Task/upload'); 
        $this->load->view('Admin/include/footer');
        $this->load->view('include/quantity'); 
          
    }
    
    public function Edit()
    {
        $this->load->view('Admin/include/header');
        $this->load->view('Admin/Task/edit'); 
         $this->load->view('Admin/include/footer');
        $this->load->view('include/quantity');
    }
    public function Manage()
    {
        $this->load->view('Admin/include/header');
        $this->load->view('Admin/Task/order'); 
    }
    
    public function Statistics()
    {
        $this->load->view('Admin/include/header');
        $this->load->view('Admin/Task/statistics'); 
    }
    public function Video()
	{
         if(isset($_POST['uploadVideo']))
        {
             $this->form_validation->set_rules('url','URL','required');
             $this->form_validation->set_rules('desc','DESC','required'); 
             
            $url = $this->input->post('url');
            $desc = $this->input->post('desc');
             
          $config['upload_path'] = '././Upload/Videos/Images/'; 
          $config['max_size'] = '500000';
          $this->load->library('upload',$config);
             
          $post_image = $_FILES['imageone']['name'];
           move_uploaded_file($_FILES['imageone']['tmp_name'],'././Upload/Videos/Images/'.$_FILES['imageone']['name']);
             
         if($this->form_validation->run() == TRUE)
         {
             $data = array(
				'v_img'=>$post_image,
				'v_url'=>$url,
				'v_desc'=>$desc,	
				 
				);
             $this->db->insert('videos',$data);
             $this->session->set_flashdata('success',"Successfully Uploaded...");
         } 
        }
		 $this->load->view('Admin/include/header');
         $this->load->view('Admin/Task/video'); 
         $this->load->view('Admin/include/footer');
         $this->load->view('include/quantity');
	}
     public function Update()
	{
        if(isset($_POST['update']))
        {  
             $this->form_validation->set_rules('name','Name','required|min_length[5]');
             $this->form_validation->set_rules('price','Price','required');
             $this->form_validation->set_rules('invoice','Invoice','required'); 
             $this->form_validation->set_rules('cat','Category','required');
             $this->form_validation->set_rules('qty','Quantity','required');
            
            
            $name = $this->input->post('name');
            $price = $this->input->post('price');
            $sp = "";
            $sale="";
            $cat = $this->input->post('cat');
            $qty = $this->input->post('qty');
            $sale = $this->input->post('sale');
            $desc = $this->input->post('desc');
            $invoice = $this->input->post('invoice');
            if($sale == "yes")
            {
                $sp = $this->input->post('sprice');
                $sale="yes";
            }else{
                $sp = "0";
                $sale="no";
            }
            
            
             $data = [];
            $count = count($_FILES['imageprd']['name']);
            if($this->form_validation->run() == TRUE)
			{
             
             
            for($i=0; $i<=$count;$i++){
                   if(!empty($_FILES['imageprd']['name'][$i])){
                         $_FILES['img']['name'] = $_FILES['imageprd']['name'][$i];

                          $_FILES['img']['type'] = $_FILES['imageprd']['type'][$i];

                          $_FILES['img']['tmp_name'] = $_FILES['imageprd']['tmp_name'][$i];

                          $_FILES['img']['error'] = $_FILES['imageprd']['error'][$i];

                          $_FILES['img']['size'] = $_FILES['imageprd']['size'][$i];

                          

                          $config['upload_path'] = '././Upload/Products/Images/'; 

                          $config['allowed_types'] = 'jpg|jpeg|png|gif';

                          $config['max_size'] = '5000';

                          $config['file_name'] = $_FILES['imageprd']['name'][$i];
                       
                          $this->load->library('upload',$config); 
                           if($this->upload->do_upload('img')){

                            $uploadData = $this->upload->data();

                            $filename = $uploadData['file_name'];



                            $data['totalFiles'][] = $filename; 
                              
                              
                          }
                   }
                  
            }
          
             $add = array(
                'invoice'=>$invoice,
                'p_name'=>$name,
				'p_price'=>$price,
				'p_sPrice'=>$sp,
				'p_image1'=>$data['totalFiles'][0],
				'p_image2'=>$data['totalFiles'][1],
                'p_image3'=>$data['totalFiles'][2],
                'p_image4'=>$data['totalFiles'][3],
                
                    
                );
             $this->db->where('invoice',$invoice);
             $this->db->update('products',$add); 
            $addDetail = array(
             'p_id'=>$this->db->insert_id(),
             'p_category'=>$cat,
             'p_quantity'=>$qty,
             'IsSale'=>$sale,
             'p_desc'=>$desc,
             
            );
              $this->db->where('p_id',$this->db->insert_id());
              $this->db->update('prd_details',$addDetail); 
                  $this->session->set_flashdata('success',"Successfully Updated...");
             }
            
         
         
         }
         
		 $this->load->view('Admin/include/header');
         $this->load->view('Admin/Task/update'); 
         $this->load->view('Admin/include/footer');
         $this->load->view('include/quantity');
	}
    
    public function Orders()
    {
         $id = $this->uri->segment(3);
         if(isset($_POST['print']))
         {
             $addDetail = array(
             'status'=>'approved',
               
            );
             $this->db->where('o_id',$id);
             $this->db->update('orders',$addDetail); 
         }
        
         $this->load->view('Admin/include/header');
         $this->load->view('Admin/Task/generateOrder'); 
    }
    
     public function Logout()
    {
        
         $this->session->sess_destroy();
		 redirect('Admin/Auth','refresh');
    }
    
    
}

?>