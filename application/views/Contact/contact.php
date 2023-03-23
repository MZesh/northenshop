 <?php
         $query = $this->db->query('select * from slider Limit 1');
         $row = $query->result();
         foreach($query->result() as $row){ 
               
         ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Contact Us</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
<?php }?>
<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		 
			    </div>
		    </div>
		  </div>
    </div>
   
  

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> Main Shahi Bazar Chitral KPK, Pakistan</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">+923414332905</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@CherryBerry.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website</span> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
               <?php echo validation_errors('<div class="alert alert-danger">error</div>');?>
              
            <form action="#" method="post" class="bg-white p-5 contact-form">
                 <?php
           if(isset($_SESSION['success'])){
               ?>
               <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
          <?php } 
               ?>
              
              <div class="form-group">
                <input type="text" class="form-control" name="name" required placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7"  class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="send" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          
        </div>
      </div>
    </section>