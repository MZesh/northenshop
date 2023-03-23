 
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
          <div class="row ">
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
	    <div class="col-md-10  order-md-last d-flex">
			<table class="table" id="pending">
			 <thead>
			   <tr>
			     <th>Invoice</th>
			     <th>Product Name</th>
			     <th>Product Quantity</th>
			     <th>Product Image</th> 
			     <th>Edit</th> 
                 <th>Delete</th> 
			   </tr>
			 </thead>
			 <tbody>
			  <?php 
             //$query = $this->db->get("products where invoice = '$invoice'");
              $query = $this->db->query("select * from products JOIN prd_details ON products.p_id = prd_details.p_id");
              foreach($query->result() as $row){  
              ?>
                 <tr>
                  <td><?php echo $row->invoice;?></td>
                  <td><?php echo $row->p_name;?></td>
                  <td><?php echo $row->p_quantity;?></td>
                  <td><img src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>" style="width:100px; height:100px;" class="img-fluid prd-img activeImg" alt="reload image"></td>
                   <td><a href="<?php echo site_url('Admin/Update/'.$row->invoice);?>" class="btn btn-warning">Edit</a></td>
                    <td><a href="<?php echo base_url();?>" class="btn btn-danger">X</a></td>
                 </tr>
                 
				<?php } ?>
			 </tbody>
			</table>
		</div>
	   </div>
        
    </div>
    </section>