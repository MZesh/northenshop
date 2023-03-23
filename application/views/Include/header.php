<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Northen Shop </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="<?php echo base_url();?>Content/css/googleapis.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Content/css/fontsapis.css" rel="stylesheet">
    <link href="<?php echo base_url();?>Content/css/amatic.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url();?>Images/fav.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/jquery.timepicker.css">

      
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/style.css">
  </head>
   <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			 
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">info@northenshop.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span  class="text">
                                <?php
                                if(isset($_SESSION['email']))
                                {?>
                                     <a href="<?php echo site_url('Auth/Logout/');?>" style="color:#fff">Logout</a>&nbsp;|
                               <?php }
                                else{
                                    ?>
                                <a href="<?php echo site_url('Auth/Login/');?>" style="color:#fff">Login</a>&nbsp;|
                                <?php
                                }
                                ?>
                                
                                
                                <a href="<?php echo site_url('Auth/Register/');?>" style="color:#fff">Register</a></span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url();?>">NorthenShop</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url();?>" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>Shopping/Full" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?php echo base_url();?>Shopping/Full">All Products</a>
                  <?php
                    
                    $query = $this->db->query("select * from products join prd_details on products.p_id = prd_details.p_id");
                      foreach($query->result() as $row){  
                    ?>
                  <a class="dropdown-item" href="<?php echo site_url('Shopping/Category/'.$row->p_category);?>"><?php echo $row->p_category;?></a>
                  <?php }?>
              	
              	
              	
              </div>
            </li>
	          <li class="nav-item"><a href="<?php echo base_url();?>Shopping/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="<?php echo base_url();?>Blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?php echo base_url();?>Shopping/Contact" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="<?php echo base_url();?>Shopping/cart" class="nav-link"><span class="icon-shopping_cart"></span><span id="cartContent">[<?php echo count($this->cart->contents());?>]</span></a></li>
                <li class="nav-item " id="search"><a  class="nav-link"><span class="icon-search pt"></span> </a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
       <div class="col-md-12 d-flex align-items-center"  style="position:fix;" >
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex searchbox hide">
                  <span style="position:absolute; right:5px; cursor:pointer" class="closebox">X</span>
                <input  type="search" class="form-control " placeholder="Search For Product Here"> 
              </div>
            </form>
          </div>
    <!-- END nav -->

   