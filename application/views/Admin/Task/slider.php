 <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p align="center"><strong>Upload Slider Images</strong> </p>
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
                <?php echo validation_errors('<div class="alert alert-danger">error</div>');?>
            
            <?php   if(isset($_SESSION['success'])){
               ?>
               <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
           <?php } ?>
              <div class="form-group">
                  <label>Choose Slider Image To Upload</label>
                <input type="file" class="form-control" id="prdImage" name="imageslide"   required>
                  
              </div>
                
                <div class="form-group"> 
                <input type="text" class="form-control" name="about" placeholder="About Image" required>
              </div>
                 
                 <div class="form-group"> 
                     <label>Enter Description </label>
                <textarea class="form-control " name="desc"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Upload Slider Image" name="uploadimg" class="btn btn-primary py-3 px-5 up">
              </div>
            </form>
          
          </div>

          
        </div>
      </div>
    </section>