 <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	 
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
                <h5>Admin Login Panel</h5>
	          </div>
          </div>
           
          <div class="col-md-4 d-flex">
          	 
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-12 order-md-last d-flex">
            <form action="#" method="post" class="bg-white p-5 contact-form">
                 <?php echo validation_errors('<div class="alert alert-danger">error</div>');?>
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="UserName">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
               
              <div class="form-group">
                <input type="submit" value="Login As Admin" name="loginAdmin" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          
        </div>
      </div>
    </section>