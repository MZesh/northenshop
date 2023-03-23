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
          <div class="col-md-4 d-flex" >
          	 
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
              
              <?php
                 $invoice =  $this->uri->segment(3);
                 //$query = $this->db->get("products where invoice = '$invoice'");
                $query = $this->db->get("products join prd_details on products.p_id=prd_details.p_id where invoice = '$invoice'");
                  foreach($query->result() as $row){  
                ?>
          <div class="col-md-10 order-md-last d-flex">
            <form action="" method="post" enctype="multipart/form-data" class="bg-white p-5 contact-form">
                 <?php echo validation_errors('<div class="alert alert-danger">error</div>');?>
                 <div class="form-group">
                <input type="text" class="form-control" name="invoice" value="<?php echo $row->invoice;?>" >
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="name" value="<?php echo $row->p_name;?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="price" value="<?php echo $row->p_price;?>">
              </div>
                
              <div class="form-group">
                  <label>Choose Images</label>
                <input type="file" class="form-control" id="prdImage" name="imageprd[]" multiple="multiple" >
                   
              </div>
                  <div class="row" id="img-sec"> 
                      
                   </div>
               <div class="form-group"> 
                <input type="text" class="form-control" name="cat" value="<?php echo $row->p_category;?>">
              </div>
                 <div class="form-group"> 
                <input type="text" class="form-control" name="qty" value="<?php echo $row->p_quantity;?>">
              </div>
                 <div class="form-group"> 
               <select name="sale" id="select" class="form-control">
		                  	<option value="dis" selected>Sale Product</option>
		                    <option value="yes">Yes</option>
		                    <option value="no">No</option>
		                     
		                  </select>
                </div>
                <div class="form-group hide sprice">
                <input type="text" class="form-control" name="sprice" value="<?php echo $row->p_sPrice;?>">
              </div>
                 <div class="form-group"> 
                     <label>Enter Description </label>
                <textarea class="form-control " name="desc" ><?php echo $row->p_desc;?></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Edit Product" name="update" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
<?php }?>
          
        </div>
      </div>
    </section>