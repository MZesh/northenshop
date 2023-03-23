 <?php
         $query = $this->db->query('select * from slider Limit 1');
         $row = $query->result();
         foreach($query->result() as $row){ 
               
         ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Checkout</span></p>
            <h1 class="mb-0 bread">Checkout</h1>
          </div>
        </div>
      </div>
    </div>
<?php }?>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ">
            <?php
              $fname="";
              $lname="";
              $province = "";
              $addr = "";
              $aprt="";
              $town="";
              $postal="";
              $cont = "";
              $email="";
               if(isset($_SESSION['email']))  {
                   $email  = $_SESSION['email'];
                   $query = $this->db->get("user  where email = '$email'");
                 foreach($query->result() as $row){ 
                 $fname = $row->fname;
                  $lname=$row->lname;
                  $province = $row->province;
                  $addr = $row->address;;
                  $aprt=$row->apartment;
                  $town=$row->town;
                  $postal=$row->postal;
                  $cont = $row->contact;
                 }
               }
              ?>
			<form action="" method="post" class="billing-form">
                <?php echo validation_errors('<div class="alert alert-danger">error</div>');?>
				<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" name="fname" value="<?php echo $fname;?>" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" name="lname" value="<?php echo $lname;?>" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Province / City</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="country" id="" value="<?php echo $province;?>" class="form-control">
		                  	<option value="peshawar">Peshawar</option>
		                    <option value="lahore">Lahore</option>
		                    <option value="islamabad">Islamabad</option>
		                    <option value="karachi">Karachi</option>
		                    <option value="multan">Multan</option>
		                    <option value="gujranwala">Gujranwala</option>
                              <option value="other">Other</option>
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" name="street" value="<?php echo $addr;?>" class="form-control" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" value="<?php echo $aprt;?>" name="aprt" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" name="city" value="<?php echo $town;?>" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" name="zip" value="<?php echo $postal;?>" class="form-control" placeholder="">
	                </div>
		            </div>
                     
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="phone" value="<?php echo $cont;?>" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="email" name="email" value="<?php echo $email;?>" class="form-control" placeholder="">
	                </div>
                </div>
               
                    <div class="col-md-6"></div>
                    <div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" value="bank" class="mr-2 payment"> Direct Bank Tranfer</label>
											</div>
										</div>
									</div>
                                     <div class="form-group hide" id="bank">
										<div class="col-md-12">
											<div class="checkbox">
											   <p>Please Transfer Payment to : (Bank Alfalah Account No ) Account No : 124554765441</p>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" value="cash on devilery" name="optradio" class="mr-2 payment">Cash on delivery</label>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" value="read" id="read" class="mr-2 "> I have read and accept the terms and conditions</label>
											</div>
										</div>
									</div>
									<input type="submit" value="Place an order" name="order" id="place" class="btn btn-primary py-3 px-4 " disabled>
								</div>
                <div class="w-100"></div>
                
	            </div>
	          </form><!-- END -->
           
             
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>Rs: <?php echo $this->cart->format_number($this->cart->total()); ?></span>
		    					</p>
                                  <?php 
                                   foreach ($this->cart->contents() as $items){ 
                                       
                                  ?>
		    					<p class="d-flex">
		    						<span>Items Name</span>
		    						<span><?php echo $items['name']; ?></span>
		    					</p>
                             <?php }?>
		    					<p class="d-flex">
		    						<span>Discount</span>
		    						<span>Rs: 0.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    						<span>Rs: <?php echo $this->cart->format_number($this->cart->total()); ?></span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-12">
	          		
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

		 