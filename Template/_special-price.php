 <!-- Special price -->
<?php
shuffle($product__shuffle);
  $brand= array_map(function($pro){return $pro['item_brand'];},$product__shuffle);
  $unique=array_unique($brand);
   sort($unique);

   
//   request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['special_price_submit']))
    {
           // call method addToCart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
    $product->updateStock($_POST['user_id'],$_POST['item_id']);
    }

}
  $in_cart = $Cart->getCartId($product->getData('cart'));
  ?>

        <section id="special-prices" class="special-price">
            <div class="container">
                <h4 class="font-rubik size-20">Special prices</h4>
                <hr>
                <div id="filters" class="button-group text-end">
                    <button class="btn is-checked" data-filter="*">All Brand</button>
              <?php
                    array_map(function ($brand){
                    printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                    }, $unique);
              ?>
                  
                </div>
               <div class="grid py-2"> 
                <?php array_map(function($item) use($in_cart){?>
                    <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand";?>">
                        <div class="item py-2 wid-200">
                            <div class="product font-rale">
                                <a href="<?php printf('%s?item_id=%s', 'products.php',  $item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? "./Assets/my img/8.jpg";?>" alt="img8"  class="wid mar-10 img-fluid"></a>
                                <div class="text-center">
                                    <h6><b><?php echo $item['item_name'] ??"Unknown";?> </b></h6>
                                    <div class="rating text-warning font-size12 px-4">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span><b>&#8377</b></span><b><?php echo $item['item_price'] ?? "0";?></b></span></span>
                                    </div>
                                      <form method="post">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                         <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <?php
                            if (in_array($item['item_id'], $in_cart ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }
                            elseif($item['Stock']==0)
                                {
                                    echo '<button type="submit" disabled class="btn btn-danger font-size-12">Out of Stock</button>';
                                }
                            else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>
                                     </form>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                <?php }, $product__shuffle) ?>
                
               </div>
            </div>
        </section>
        <!-- End Special price -->