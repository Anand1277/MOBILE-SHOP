 <?php 
 shuffle($product__shuffle);
 

 //   request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['new_phones_submit']))
    {
           // call method addToCart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
        $product->updateStock($_POST['user_id'],$_POST['item_id']);
    }
  }
 ?>
 
 <!-- New PHones Section -->
<section id="new-phones">
           
   <div class="container">
                <h4 class="font-rubik font-size-20">New Phones</h4>
                <hr>
     <div class="owl-carousel owl-theme" >
                   
                      
           <?php foreach ($product__shuffle as $item){?>
           <div class="item py-2 padd">
               <div class="product font-rale">
                   <a href="<?php printf('%s?item_id=%s', 'products.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image']??"";?>" alt="img1" class="wid img-fluid"></a>
                   <div class="text-center">
                       <h6><b><?php echo $item['item_name']??"Unknown";?></b></h6>
                       <div class="rating text-warning font-size12 px-4">
                           <span><i class="fas fa-star"></i></span>
                           <span><i class="fas fa-star"></i></span>
                           <span><i class="fas fa-star"></i></span>
                           <span><i class="fas fa-star"></i></span>
                           <span><i class="far fa-star"></i></span>
                       </div>
                       <div class="price py-2">
                           <span><b>&#8377</b></span><b><?php echo $item['item_price']??'0';?></b></span></span>
                       </div>
                       <form method="post">
                           <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                           <input type="hidden" name="user_id" value="<?php echo 1;?>">
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }
                               elseif($item['Stock']==0)
                                {
                                    echo '<button type="submit" disabled class="btn btn-danger font-size-12">Out of Stock</button>';
                                }
                                else{
                                    echo '<button type="submit" name="new_phones_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                              
                       </form>
                   </div>
               </div>
               
           </div>
            <?php } //closing foreach function?>  

                      </div>
                    
                
     </div>
</section>
        <!-- End New PHones Section -->