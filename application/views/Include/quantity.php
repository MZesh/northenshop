
<script>
		$(document).ready(function(){
         
		var quantitiy=0;
            
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
            //select
            $('.prd-img').click(function(){
            
                $('.prd-chnge').attr('src',$(this).attr('src'));
                $('.href-chnge').attr('href',$('.prd-chnge').attr('src'));
                
                $(this).addClass('activeImg');
                $(this).siblings().removeClass('activeImg');
            });
            $('.img-prod').click(function(){
            
                
            });
            
		    $('.payment').change(function(){
               var pay = $(this).val();
                if(pay == 'bank')
                    {
                          $('#bank').removeClass('hide');
                    }else{
                         $('#bank').addClass('hide');
                    }
                   
            });
            $('.ion-ios-heart').click(function(){
                
                   
            });
              $('.pt').click(function(){
                
                  $('.searchbox').removeClass('hide');
                  $('.searchbox').focus();
            });
              $('.closebox').click(function(){
                
                  $('.searchbox').addClass('hide');
            });
            $('#select').change(function(){
                
              var selected =  $(this).val();     
            
                   if(selected == "yes")
                    {
                        $('.sprice').removeClass('hide');
                    }else{
                        $('.sprice').addClass('hide');
                    } 
            });
            $('#prdImage').change(function(e){
                
              var files = e.target.files;
                $.each(files,function(i, file){
                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function(e){
                        var tmp = '<img class="col-md-3 upload-img" src="'+e.target.result+'" alt="Upload Image">';
                        $('#img-sec').append(tmp);
                    };
                });
            });
              //prdImage  reply   $('#place').removeAttr('disabled');
             $('#read').change(function(){
                 if($(this).prop('checked'))
                     {
                          $('#place').removeAttr('disabled');
                     }else{
                          $('#place').attr('disabled','disabled');
                     }
               
            });
             
            //checkout
             $('.reply').click(function(){
                
                  $('#formreply').removeClass('hide');
            });
            $('#prdImage').change(function(){
                  
            });
             $(window).scroll(function(){
                 if($(this).scrollTop() > 350){ 
                     $('#search').addClass('hide');
                 }if($(this).scrollTop() < 350){
                     $('#search').removeClass('hide');
                 }
                 
                 
             });
            
            $('.buy-now').click(function(e){
                e.preventDefault();
                var cnt = "<?php echo count($this->cart->contents());?>"; 
                var ids = $(this).attr('id');
                $.ajax({
                    url:"<?php echo base_url();?>Shopping/CartAdd/"+ids,
                    success:function(){  
                       location.reload();
                    }
                });
                
            });
               $('.remove').click(function(e){
                e.preventDefault();
                var ids = $(this).attr('id');
                $.ajax({
                    url:"<?php echo base_url();?>Shopping/CartRemove/"+ids,  
                    success:function(){ 
                         
                       location.reload();
                    } 
                    
                });
                 
            });
           $('#subsForm').on(,'submit',function(e){
                e.preventDefault(); 
               
                    
                });
           });
		});
	</script>