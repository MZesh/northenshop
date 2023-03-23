 <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
        <?php
         $query = $this->db->get('slider');
         foreach($query->result() as $row){ 
               
         ?>
	      <div class="slider-item" style="background-image: url(<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12  text-center">
	              <h1 class="mb-2"><?php echo $row->about;?></h1>
	              <h2 class="subheading mb-4"><?php echo $row->descr;?></h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
          <?php }?>
	       
	    </div>
    </section> 
<hr/>
<div class="container">
    		<div class="row">
                <?php
                $query = $this->db->get('products');
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
                                     
	    							<a href="" class="buy-now d-flex justify-content-center align-items-center mx-1" id="<?php echo $row->invoice;?>">
	    								<span><i class="ion-ios-cart"></i></span> <span id="invoice" style="display:none;"><?php echo $row->invoice;?></span>
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
		 
 <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section  text-center">
          	<span class="subheading">Videos</span>
            <h2 class="mb-4">Our satisfied Videos</h2>
            <p>Some of Our Satisfying Videos are here, you can definitly enjoy to look at these clips.</p>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
                <?php
                
                $query = $this->db->get("videos ");
                  foreach($query->result() as $row){  
                ?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                   <a href="<?php echo $row->v_url;?>" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							 
                         <div class="user-img mb-5" style="background-image: url(<?php echo base_url();?>Upload/Videos/Images/<?php echo $row->v_img;?>)">
                           <span class="quote d-flex align-items-center justify-content-center">
                         <i class="icon-play"></i>
                    </span>
                       </div>
				     </a>
                  
                </div>
              </div>
                
                <?php }?>
                 
              </div>
          </div>
        </div>
      </div>
    </section>

    <hr> 
