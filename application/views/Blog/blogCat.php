 <?php
         $query = $this->db->query('select * from slider Limit 1');
         $row = $query->result();
         foreach($query->result() as $row){ 
               
         ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>
<?php }?>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
						<div class="row">
                            <?php
                              $cat = $this->uri->segment(3);         
                            $query = $this->db->query("select * from products join prd_details on products.p_id=prd_details.p_id where p_category='$cat' limit 10");
                               foreach($query->result() as $row){ 
                            ?>
							<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="<?php echo site_url('Blog/Single/'.$row->invoice);?>" class="block-20" style="background-image: url('<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#"><?php echo $row->created;?></a></div>
		                  <div><a href="#">Admin</a></div> 
		                </div>
		                <h3 class="heading"><a href="#"<?php echo $row->p_name;?></a></h3>
		                <p><?php echo $row->p_desc;?>.</p>
		                <p><a href="<?php echo site_url('Blog/Single/'.$row->invoice);?>" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
                            <?php }?>
              
              </div>
              
              
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Categories</h3>
              <ul class="categories">
                   
               <?php
                              
                             //$query = $this->db->get("products where invoice = '$invoice'");
                 $queryCat = $this->db->query("select * from products join prd_details on products.p_id=prd_details.p_id");
                 foreach($queryCat->result() as $rowCat){ 
                  
                ?>
                
                <li><a href="<?php echo site_url('Blog/Category/'.$rowCat->p_category);?>"><?php echo $rowCat->p_name; ?> <span>(<?php echo $rowCat->p_quantity; ?>)</span></a></li>
                  <?php }?>
              </ul>
            </div>
            
            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Recent Blog</h3>
                 <?php
                       //$query = $this->db->get("products where invoice = '$invoice'");
                   $query = $this->db->query("select * from products join prd_details on products.p_id=prd_details.p_id limit 10");
                   foreach($query->result() as $row){ 
                  ?>
              <div class="block-21 mb-4 d-flex">
                  
                <a href="<?php echo site_url('Blog/Single/'.$row->invoice);?>" class="blog-img mr-4" style="background-image: url(<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>);"></a>
                 
                <div class="text">
                  <h3 class="heading-1"><a href="<?php echo site_url('Blog/Single/'.$row->invoice);?>"><?php echo $row->p_desc;?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php echo $row->created;?></a></div>
                     
                  </div>
                </div>
                  
              </div>
                <?php }?>
             
              
              </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">fruits</a>
                <a href="#" class="tag-cloud-link">tomatoe</a>
                <a href="#" class="tag-cloud-link">mango</a>
                <a href="#" class="tag-cloud-link">apple</a>
                <a href="#" class="tag-cloud-link">carrots</a>
                <a href="#" class="tag-cloud-link">orange</a>
                <a href="#" class="tag-cloud-link">pepper</a>
                <a href="#" class="tag-cloud-link">eggplant</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->