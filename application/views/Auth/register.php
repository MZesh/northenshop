<div class="container">
<div class="row block-9">
          <div class="col-md-12 order-md-last ">
               <?php echo validation_errors('<div class="alert alert-danger">error</div>');?>
              
            	<form action="#" method="post" class="billing-form">
							<h3 class="mb-4 billing-heading">Registration</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" name="fname" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" name="lname" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">Province / City</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="country" id="" class="form-control">
		                  	<option value="peshawar">Peshawar</option>
		                    <option value="lahore">Lahore</option>
		                    <option value="islamabad">Islamabad</option>
		                    <option value="karachi">Karachi</option>
		                    <option value="Multan">Multan</option>
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
	                  <input type="text" class="form-control" name="street" placeholder="House number and street name">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" name="aprt" placeholder="Appartment, suite, unit etc: (optional)">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" name="city" placeholder="">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" name="zip" placeholder="" >
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" name="phone" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" name="email" placeholder="">
	                </div>
                </div>
                 <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailpass">Password</label>
	                  <input type="password" class="form-control" name="pass" placeholder="">
	                </div>
                    </div>
                     <div class="col-md-6">
	                 <div class="form-group">
                <input type="submit" value="Register" name="register" class="btn btn-primary py-3 px-5">
              </div>
                    </div>
                    
                <div class="w-100"></div>
                 
	            </div>
	          </form><!-- END -->
          
          </div>

          
        </div>
    </div>