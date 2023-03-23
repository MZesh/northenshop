 <?php
         $query = $this->db->query('select * from slider Limit 1');
         $row = $query->result();
         foreach($query->result() as $row){ 
               
         ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Shop</span></p>
            <h1 class="mb-0 bread">Shop</h1>
          </div>
        </div>
      </div>
    </div>
<?php }?>
<section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p align="center"><strong>Products</strong> </p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	 
          </div>
           
        </div>
        <div class="row block-9"> 
          <div class="col-md-9 order-md-last d-flex">
            <div class="container">
    		<div class="row">
                <?php
                $invoice =  $this->uri->segment(3); 
                 $query = $this->db->get("products join prd_details on products.p_id=prd_details.p_id where p_category = '$invoice'");
                foreach($query->result() as $row){ 
               
                ?>
    			<div class="col-md-6 col-lg-3 ">
    				<div class="product">
    					<a href="<?php echo site_url('Shopping/View/'.$row->invoice);?>" class="img-prod"><img class="img-fluid" src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>" alt="product-img">
    						 
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $row->p_name;?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">Rs. &nbsp;<?php echo $row->p_price;?></span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="<?php echo site_url('Shopping/View/'.$row->invoice);?>"  class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a> 
	    							<a href="<?php echo site_url('Shopping/CartAdd/'.$row->invoice);?>" class="buy-now d-flex justify-content-center align-items-center mx-1" id="<?php echo $row->invoice;?>">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a   class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
            <?php  }?>
    </div>
              </div>
		 
          
          </div>

          
        </div>
      </div>
    </section>