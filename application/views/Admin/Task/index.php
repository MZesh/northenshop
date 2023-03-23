 
<section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 ">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	 
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
             <span>Welcome :</span><strong>Admin/<?php echo $_SESSION['username'];?></strong>
	          </div>
          </div>
           
          <div class="col-md-4 d-flex">
          	 
          </div>
        </div>
        <div class="row">
            <div class="col-md-2 ">
            <ul>
                <li><a href="<?php echo base_url();?>Admin/Task">Dashboard</a></li>
                <li><a href="<?php echo base_url();?>Admin/Upload">Upload Product</a></li>
                <li><a href="<?php echo base_url();?>Admin/Edit">Edit Product</a></li>
                <li><a href="<?php echo base_url();?>Admin/Manage">Manage Order</a></li>
                <li><a href="<?php echo base_url();?>Admin/video">Videos</a></li>
                <li><a href="<?php echo base_url();?>Admin/slider">Slider</a></li>
                <li><a href="<?php echo base_url();?>Admin/Statistics">Statistics</a></li>
            </ul>
            </div>
          <div class="col-md-10 ">
            <div class="row">
              
              <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
             <a href="<?php echo base_url();?>Admin/Manage"><span>Total Order :</span><sup>0</sup></a>
	          </div>
          </div>
            <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
             <span>Total In Cart :</span><sup>0</sup>
	          </div>
          </div>
               <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
                <a href="<?php echo base_url();?>"><span>Total Subscriber :</span><sup>0</sup></a>
	          </div>
          </div>
               <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
             <span>Total Delivered :</span><sup>0</sup>
	          </div>
          </div>
              </div>
          </div>

          
        </div>
      </div>
    </section>
 