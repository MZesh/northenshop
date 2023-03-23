 
<section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p align="center"><strong>Edit Product</strong> </p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	 
          </div>
           
        </div>
        <div class="row block-9">
            <div class="col-md-2 order-md-last d-flex">
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
          <div class="col-md-10 order-md-last d-flex">
            <form action="" method="post" enctype="multipart/form-data" class="bg-white p-5 contact-form">
                <?php
           if(isset($_SESSION['success'])){
               ?>
               <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
          <?php } 
          ?>
              <div class="form-group">
                  <label>Choose Image One</label>
                <input type="file" class="form-control" id="prdImage" name="imageone" placeholder="Subject">
                  
              </div>
                <div class="row" id="img-sec" >
                
                </div><br>
              <div class="form-group">
                <input type="text" class="form-control" name="url" placeholder="Enter Video Url..">
              </div>
                 <div class="form-group"> 
                     <label>Enter Video Description </label>
                <textarea class="form-control " name="desc"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Upload Video" name="uploadVideo" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          
        </div>
      </div>
    </section>