 <?php
         $query = $this->db->query('select * from slider Limit 1');
         $row = $query->result();
         foreach($query->result() as $row){ 
               
         ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>View Product</span></p>
            <h1 class="mb-0 bread">View Product</h1>
          </div>
        </div>
      </div>
    </div>
<?php }?>
<?php
 $invoice =  $this->uri->segment(3);
 //$query = $this->db->get("products where  invoice = '$invoice'");
$query = $this->db->get("products join prd_details on products.p_id=prd_details.p_id where invoice = '$invoice'");
  foreach($query->result() as $row){  
?>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
                <div class="col-lg-1 mb-5 "> 
                     <img src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>" class="img-fluid prd-img activeImg" alt="reload image">
                     <img src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image2;?>" class="img-fluid prd-img" alt="reload image">
                     <img src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image3;?>" class="img-fluid prd-img" alt="reload image">
                    <img src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image4;?>" class="img-fluid prd-img" alt="reload image">
                </div>
    			<div class="col-lg-6 mb-5 ">
    				<a href="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>" class="image-popup href-chnge"><img src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>" class="img-fluid prd-chnge" alt="reload image"></a>
    			</div>
    			<div class="col-lg-5 product-details pl-md-5 ">
    				<h3><?php echo $row->p_name;?></h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">
								<a href="#" class="mr-2">5.0</a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
								<a href="#"><span class="ion-ios-star-outline"></span></a>
							</p>
							<p class="text-left mr-4">
								<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
							</p>
							<p class="text-left">
								<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
							</p>
						</div>
    				<p class="price"><span>Rs.&nbsp;<?php echo $row->p_price;?></span></p>
    				<p><?php echo $row->p_desc;?>
						</p>
						<div class="row mt-4">
							
							<div class="w-100"></div>
                     <?php echo form_open('Shopping/AddToCart/'.$row->invoice,array('class' => 'input-group col-md-6 d-flex mb-3' , 'id'=>'form')); ?> 
                     <label>Select Item Quantity (in Kg's)</label>
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
                                  
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number"   value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>  
                    <div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;"><?php echo $row->p_quantity;?> kg available</p>
	          	</div> 
                     <?php echo form_submit('addCart', 'Add to Cart', array('class' => 'btn btn-black py-3 px-5 ', 'id'=>$row->invoice)); ?>
                     
                     <?php form_close();?>            
	          	
          	</div>
          	
    			</div>
    		</div>
    	</div>
    </section>
<?php } ?>
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
            <p>Original and 100% organic Dry fruit and Fresh fruit of Chitral.</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
                 <?php
                 $invoice =  $this->uri->segment(3);
                 //$query = $this->db->get("products where invoice = '$invoice'");
                $related_query = $this->db->get("products join prd_details on products.p_id=prd_details.p_id where p_category = '$row->p_category'");
                  foreach($related_query->result() as $row_related){  
                ?>
    			<div class="col-md-6 col-lg-3 ">
    				<div class="product">
    					 <img class="img-fluid img-prod" src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>" alt="reload image ">
    						 
    						<div class="overlay"></div>
    					 
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $row_related->p_name;?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">Rs. &nbsp;<?php echo $row_related->p_price;?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="<?php echo site_url('Shopping/View/'.$row->invoice);?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			 <?php }?>
    		</div>
    	</div>
    </section>

	 