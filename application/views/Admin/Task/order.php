 
<section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p align="center"><strong>Order Received</strong> </p>
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
			<table class="table table-bordered" id="pending">
			 <thead>
			   <tr>
			     <th>First Name</th>
			     <th>Last Name</th> 
			     <th>Total Price</th> 
                 <th>Address</th> 
                 <th>View</th> 
			   </tr>
			 </thead>
			 <tbody>
			  <?php 
              
                 //$query = $this->db->get("products where  invoice = '$invoice'");
                $query = $this->db->query("select * from orders  where status='pending' ");
                  foreach($query->result() as $row){ 
              ?>
                 <tr>
                  <td><?php echo $row->fname;?></td>
                  <td><?php echo $row->lname;?></td>  
                   <td><?php echo $row->total;?></td>
                    <td><?php echo $row->address;?></td>
                    <td><a class="btn btn-warning" href="<?php echo site_url('Admin/Orders/'.$row->o_id)?>"?>View Order</a></td>
                 </tr>
                 
				<?php } ?>
			 </tbody>
			</table>
             
		</div>
	   
        

          
        </div>
      </div>
    </section>