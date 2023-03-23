<div class="row">
    <div class="col-md-1"></div>
<div class="col-md-10 slip">
		 <h3 align="center">Selling  Report</h3>
		</div>
     <div class="col-md-1"></div>
    </div>
 <div class="row">
    <div class="col-md-1"></div>
 <div class="col-md-10 ">
    <div class="row">
     <?php 
        $id = $this->uri->segment(3);
        $query = $this->db->query("select * from orders join suborder on orders.o_id=suborder.o_id where reference='$id'");
        $row = $query->row();
         ?>
        <div class="col-md-2">
        <h4 align="center">Name</h4><hr> <p align="center"><?php echo $row->fname." ".$row->lname;?></p>
        </div>
        <div class="col-md-2">
         <h4 align="center">Address</h4><hr> <p align="center"><?php echo $row->address;?></p>
        </div>
        <div class="col-md-2">
         <h4 align="center">Products</h4><hr>
            <?php foreach($query->result() as $rowpro){?>
            <p align="center"><?php echo $rowpro->product;?></p>
            <?php }?>
        </div>
        <div class="col-md-2">
         <h4 align="center">Quantity</h4><hr>
            <?php foreach($query->result() as $rowpro){?>
            <p align="center"><?php echo $rowpro->quantity;?></p>
            <?php }?>
        </div>
         <div class="col-md-2">
         <h4 align="center">Total</h4><hr> <p align="center"><?php echo $row->total;?></p>
        </div>
    </div>
		</div>
     <div class="col-md-1"></div>
    </div>
<div class="container">
 <div class="row" align="center">
    <div class="col-md-2">
     <a href="<?php echo base_url();?>Shopping/Full" class="btn btn-danger">Back To Shopping</a>
     </div>
<div class="col-md-9 ">
		 <p align="center"><strong>Reference ID:&nbsp;</strong><?php echo $row->reference;?></p>
		</div>
     <div class="col-md-1"></div>
    </div>
    
    </div>