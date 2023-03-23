 <?php
         $query = $this->db->query('select * from slider Limit 1');
         $row = $query->result();
         foreach($query->result() as $row){ 
               
         ?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo base_url();?>Upload/Slider/Images/<?php echo $row->image;?>');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9  text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url();?>">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>
<?php }?>
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ">
    				<div class="cart-list">
                       <?php echo form_open('Shopping/CartUpdate'); ?>

                         
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>Quantity</th> 
						        <th>Name</th>
						        <th>Item Price</th>
						        <th>Sub Total</th> 
                                <th>Remove</th>
                                <th>&nbsp;</th>
						         
						      </tr>
						    </thead>
						    <tbody>

                    <?php $i = 1; ?>

                    <?php foreach ($this->cart->contents() as $items): ?>

                            <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                            <tr>
                                    <td><?php echo form_input(array('name' => $i.'qty', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'id' =>'formqty')); ?></td>
                                    <td class="hide"><?php echo form_input(array('name' => $i.'[rowid]', 'value' => $items['rowid'],  'id' =>'formqty', 'name'=>'rowid')); ?></td>
                                
                                     
                                    <td>
                                       
                                            <?php echo $items['name']; ?>

                                            <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                                    <p>
                                                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                                            <?php endforeach; ?>
                                                    </p>

                                            <?php endif; ?> 

                                    </td>
                                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                                    <td style="text-align:right">Rs :<?php echo $this->cart->format_number($items['subtotal']); ?></td> 
                                    <td style="text-align:right"><a class="remove" id="<?php echo $items['rowid'];?>" href ="" >X</a></td> 
                                     
                                    
                            </tr>

                                    <?php $i++; ?>

                                    <?php endforeach; ?>

                                    <tr>
                                            <td colspan="2"> </td>
                                            <td class="right"><strong>Total</strong></td>
                                            <td class="right">Rs :<?php echo $this->cart->format_number($this->cart->total()); ?></td>
                                            <td><p><?php echo form_submit('update_cart', 'Update your Cart', array('class' => 'btn btn-success right', 'id'=>'back')); ?></p></td>
                                    </tr>
                                    </tbody>
                                   </table>
                        <?php form_close();?>
                        
                         <a href="<?php echo base_url();?>Shopping/Full" class="btn btn-warning py-3 px-4 " >Back To Shopping</a>
                         <a href="<?php echo base_url();?>Shopping/Checkout" class="btn btn-primary py-3 px-4 pull-right">Proceed to Checkout</a><hr>
                                          </div>
                                    </div>
    		</div>
    	 	</div>
</section>

 