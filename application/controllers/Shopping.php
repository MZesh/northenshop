<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

   public function __contstruct()
    {
         
       $this->load->library('form_validation');
       $this->load->library('user_agent');
       $this->load->library('cart');
    }
	public function Contact()
	{ 
        if(isset($_POST['send']))
        {
            
             $this->form_validation->set_rules('name','Name','required|min_length[5]');
             $this->form_validation->set_rules('email','Email','required');
             $this->form_validation->set_rules('subject','Subject','required');
             $this->form_validation->set_rules('message','Message','required'); 
            
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $sub = $this->input->post('subject');
            $mess = $this->input->post('message');
            
            if($this->form_validation->run() == TRUE)
			{
             $data = array(
                'name'=>$name,
                'email'=>$email,
				'subject'=>$sub,
				'message'=>$mess,
                );
             $result= $this->db->insert('contact',$data); 
            $this->session->set_flashdata('success',"Your message has been sent.");
            }
             
        }
		 $this->load->view('include/header');
         $this->load->view('Contact/contact');
         $this->load->view('include/footer');
	}
    
    public function Full()
    {
         $this->load->view('include/header');
         $this->load->view('Category/Full');
         $this->load->view('include/footer');
        $this->load->view('include/quantity');
    }
    public function Checkout()
    {
         
         if(isset($_POST['order']))
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
            
            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $country = $this->input->post('country');
            $street = $this->input->post('street');
            $aprt = $this->input->post('aprt');
            $city = $this->input->post('city');
            $zip = $this->input->post('zip');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $pay = $this->input->post('optradio');
            
            
             if($this->form_validation->run() == TRUE)
                {
                 $data = array(
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'province'=>$country,
                    'address'=>$street,
                     'aprt'=>$aprt,
                     'city'=>$city,
                     'zip'=>$zip,
                     'email'=>$email, 
                     'phone'=>$phone,
                     'pay'=>$pay,
                     'total'=>$this->cart->total(),
                     'status' => 'pending',
                      
                    );
                 $result= $this->db->insert('orders',$data); 
                 $row_id =$this->db->insert_id();
                  $pre = "134020".$row_id;
                  foreach ($this->cart->contents() as $items){
            
                      $add = array(
                       'o_id'=>$row_id,
                        'invoice'=>$items['inv'],
                        'product'=>$items['name'],
                        'quantity'=>$items['qty'],
                        'reference'=>$pre,
                        
                         
                      );
                     $query= $this->db->insert('suborder',$add); 
                    }
                $this->session->set_flashdata('success',"Order Success.");
                 redirect('Shopping/Slip/'.$pre,'refresh');
                }
                 
            } 
       
         $this->load->view('include/header');
         $this->load->view('Checkout/checkout');
         $this->load->view('include/footer');
        $this->load->view('include/quantity');
        
    }
    public function Slip()
    {
          
         
         $this->load->view('include/header');
         $this->load->view('Checkout/slip');
          
    }
    public function Cart()
    {

       
        $this->load->view('include/header');
         $this->load->view('Cart/cart');
         $this->load->view('include/footer');
        $this->load->view('include/quantity');
    }
    
    public function CartAdd()
    {
        $id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('invoice',$id);
        $query = $this->db->get();
        $rows = $query->row();
        $sprice = $rows->p_sPrice;
        $price = "";
        if($sprice > 0)
        {
             $div = $sprice/100;
             $dsc = $rows->p_price - ($rows->p_price * $div);
             $price = $dsc;
        }else{
            $price = $rows->p_price;
        }
        $data = array(
        'id'      => $id,
        'qty'     => 1,
        'inv' =>$rows->invoice,
        'price'   => $price,
        'name'    => $rows->p_name
         
        );

        $this->cart->insert($data);
       
        //redirect('Shopping/Cart','refresh');
    }
    
    public function AddToCart()
    {
        $id = $this->uri->segment(3); 
         $qty = $this->input->post('quantity'); 
         
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('invoice',$id);
        $query = $this->db->get();
        $rows = $query->row();
        $sprice = $rows->p_sPrice;
        $price = "";
        if($sprice > 0)
        {
             $div = $sprice/100;
             $dsc = $rows->p_price - ($rows->p_price * $div);
             $price = $dsc;
        }else{
            $price = $rows->p_price;
        }
        
        $data = array(
        'id'      => $id,
        'qty'     => $qty,
        'inv' =>$rows->invoice,
        'price'   => $price,
        'name'    => $rows->p_name
         
        );

        $this->cart->insert($data); 
        redirect('Shopping/Cart','refresh');
    }
    
    
    public function CartRemove()
    {
       $rowid = $this->uri->segment(3); 
       $this->cart->remove($rowid);
       redirect('Shopping/Cart','refresh');
        
    }
    public function CartUpdate()
    {
        $rowid = $this->uri->segment(3); 
        $qty = $this->input->post('frmqty'); 
        $i=1;
        foreach ($this->cart->contents() as $items){
        $data = array(
        'rowid' => $items['rowid'],
        'qty'   => $_POST[$i.'qty']
           );
             $this->cart->update($data);
            $i++;
        }
       
       redirect('Shopping/Cart','refresh');
    }
    public function View()
    {
 
        $this->load->view('include/header');
         $this->load->view('Single/single');
         $this->load->view('include/footer');
        $this->load->view('include/quantity');
    }
    
    public function about()
    {
         $this->load->view('include/header');
         $this->load->view('About/about');
         $this->load->view('include/footer');
         $this->load->view('include/quantity');
        
    }
    
    public function checkCart()
    {
        $this->load->library('user_agent');
        $data['ip_address'] = $this->input->ip_address();
        $this->load->view('Cart/cart',$data);
    }
    public function Category()
    {
         $this->load->view('include/header');
         $this->load->view('Category/cat');
         $this->load->view('include/footer');
         $this->load->view('include/quantity');
    }
    
    public function Subscribe()
    {
        
    }
}

?>