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
               <?php
             $invoice =  $this->uri->segment(3);
             //$query = $this->db->get("products where invoice = '$invoice'");
            $query = $this->db->get("products join prd_details on products.p_id=prd_details.p_id where invoice = '$invoice'");
              foreach($query->result() as $row){  
            ?>
						<h2 class="mb-3"><?php echo $row->p_name;?></h2>
            <p><?php echo $row->p_desc;?></p>
            <p>
              <img src="<?php echo base_url();?>Upload/Products/Images/<?php echo $row->p_image1;?>" alt="" class="img-fluid">
            </p>
           
            
   <?php }?>

            <div class="pt-5 mt-5">
                  <?php 
                
             //$query = $this->db->get("products where invoice = '$invoice'");
               $queryComents = $this->db->get("comment");
                $rows = $queryComents->num_rows();
                echo ' <h3 class="mb-5">'.$rows .'Comments</h3>';
                 foreach($queryComents->result() as $row){
                ?>
             
              <ul class="comment-list">
                  <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url();?>Images/image_6.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $row->name;?></h3>
                    <div class="meta"><?php echo $row->created;?></div>
                    <p><?php echo $row->message;?></p>
                      <?php
                     if(isset($_SESSION['email']))
                      {?>
                    <p><a  class="reply">Reply</a></p>
                      
                       <form action="#" method="post" id="formreply" class="p-5 bg-light hide">
                             
                              <div class="form-group"> 
                                <input type="text" name="msg" class="form-control" id="Comment"  >
                              </div>
                               
                              <div class="form-group">
                                <input type="submit" value="Post Comment"  disabled name="commentPost" class="btn py-3 px-4 btn-primary">
                              </div>

                            </form>
                      <?php }?>
                  </div>

                   
                </li>

                 </ul>
                <?php }?>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                  <?php
                     if(isset($_SESSION['email']))
                      {?>
                           <form action="#" method="post" class="p-5 bg-light">
                          <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                          </div>
                          <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" name="url" class="form-control" id="website">
                          </div>

                          <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message"  cols="30" rows="10" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" value="Post Comment" name="comment" class="btn py-3 px-4 btn-primary">
                          </div>

                        </form>
                        <?php }
                             else{
                            ?>
                        <form action="#" method="post" class="p-5 bg-light">
                            <h3>Please Login to Comment</h3>
                              <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" name="name" class="form-control" id="name"  disabled>
                              </div>
                              <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" name="email" class="form-control" disabled id="email" required>
                              </div>
                              <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" name="url" class="form-control" disabled id="website">
                              </div>

                              <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message"  cols="30" rows="10" disabled class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                <input type="submit" value="Post Comment"  disabled name="comment" class="btn py-3 px-4 btn-primary">
                              </div>

                            </form>
                             <?php
                              }
                       ?>
              
              </div>
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
                 <?php
                              
                             //$query = $this->db->get("products where invoice = '$invoice'");
                 $queryCat = $this->db->query("select * from products join prd_details on products.p_id=prd_details.p_id");
                 foreach($queryCat->result() as $rowCat){ 
                  
                ?>
                 <a href="<?php echo site_url('Blog/Category/'.$rowCat->p_category);?>" class="tag-cloud-link"><?php echo $rowCat->p_name; ?></a> 
                  <?php }?>
               
              </div>
            </div>

            
          </div>

        </div>
      </div>
    </section> <!-- .section -->s