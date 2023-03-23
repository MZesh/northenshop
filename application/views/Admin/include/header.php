<?php if(!isset($_SESSION['username'])){
    
    redirect('Admin/Auth','refresh');
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Northen Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
     <link rel="icon" href="<?php echo base_url();?>Images/fav.jpg" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo base_url();?>Content/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
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
		 
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url();?>">NorthenShop</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo base_url();?>" class="nav-link">Home</a></li>
	          
	          <li class="nav-item"><a href="<?php echo base_url();?>Admin/Logout" class="nav-link">Logout</a></li> 
	          

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    