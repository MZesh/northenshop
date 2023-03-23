 
<section class="ftco-section contact-section bg-light" id="some">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p align="center"><strong>Generate Order</strong> </p>
	          </div>
          </div>
            
        </div>
         <form action="" method="post">
           <a href="<?php echo base_url();?>Admin/Task" class="btn btn-success">Back To Dashboard</a>
             &nbsp;<input type="submit" name="print" class="btn btn-info"  value="Print This Order" id="print">
          </form>
    </div>
    </section>
<hr>
<div class="container">
 <div class="row">
    <div class="col-md-2"></div>
 <div class="col-md-10 " >
    <div class="row">
     <?php 
        $id = $this->uri->segment(3);
        $ref = "134020".$id;
        $query = $this->db->query("select * from orders join suborder on orders.o_id=suborder.o_id where reference='$ref'");
        $row = $query->row();
        for($i=0;$i< 18 ; $i++)
        {
         ?>
        <div class="col-md-3" style="border:1px solid gray; margin:5px" id="printDiv">
        <small align="center" style="color:black;">Name: <?php echo $row->fname." ".$row->lname;?></small> <br>
        <small align="center" style="color:black;">Address: <?php echo $row->address;?></small>  <br>
       
            <small align="center" style="color:black;">Products :</small>
             <?php foreach($query->result() as $rowpro){?>
             <small align="center" style="color:black;"><?php echo $rowpro->product;?> : Qty : <?php echo $rowpro->quantity;?></small> ,
             
            <?php }?>
             
            <br> <small align="center" style="color:black;">Total: <?php echo $row->total;?></small>  <br>
        </div>
         
        <?php }?>
         
    </div>
		</div>
     
    </div>
   
</div><hr>
  <script src="<?php echo base_url();?>Content/js/jquery.min.js"></script>
<script>

$(document).ready(function(){
    
    $('#print').click(function(){
        
       $('#some').hide();
       $('#printDiv').show();
        window.print();
        $('#some').show();
    });
});
</script>