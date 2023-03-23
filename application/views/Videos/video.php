 <?php
         $query = $this->db->query('select * from slider Limit 1');
         $row = $query->result();
         foreach($query->result() as $row){ 
               
         ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Videos</span></p>
            <h1 class="mb-0 bread">Popular Videos</h1>
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
	            <p align="center"><strong>Popular Videos</strong> </p>
	          </div>
          </div>
          <div class="col-md-4 d-flex" >
          	 
          </div>
           
        </div>
          
          <div class="row block-9">
            
              <?php
                 $invoice =  $this->uri->segment(3);
                 //$query = $this->db->get("products where invoice = '$invoice'");
                $query = $this->db->get("videos ");
                  foreach($query->result() as $row){  
                ?>
          <div class="col-md-4 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo  base_url();?>Upload/Videos/Images/<?php echo $row->v_img;?>);">
              <a href="<?php echo $row->v_url;?>" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
             
           </div>
               
         <?php }?>
          
        </div>
      </div>
    </section>
 