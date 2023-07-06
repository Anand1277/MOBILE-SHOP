<?php

    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :



    //   request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['product_submit']))
    {
           // call method addToCart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
     $product->updateStock($_POST['user_id'],$_POST['item_id']);
    } 
  }
?>

<!-- Product Section -->

        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <img src="<?php echo $item['item_image'] ?? "./Assets/my img/1.jpg"?>" alt="product" class="img-fluid rounded prod-img">
                        <div class="row pt-4 font-size-20 font-baloo">
                        <div class="col">
                            <button type="submit" class="btn btn-info form-control font-size-20" >Proceed to Buy</button>
                        </div>
                        <div class="col">
                             <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                             <?php
                             
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success form-control font-size-20">In the Cart</button>';
                                }
                                elseif($item['Stock']==0)
                                {
                                     echo '<button type="submit" disabled class="btn btn-danger form-control font-size-20">Out of Stock</button>';
                                }
                                else{
                                    echo '<button type="submit" name="product_submit" class="btn btn-warning form-control font-size-20">Add to Cart</button>';
                                }
                                ?>
                            </form>
                          
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 py-5">
                        <h5 class="font-baloo " style="font-size: 28px; font-weight:700px;"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                        <small><?php echo $item['item_brand'] ?? "Brand"; ?></small>
                        <div class="d-flex">
                        <div class="rating text-warning font-size12 px-4">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-rale font-size-14 no_deco">19,876 ratings | 2000+ answered question</a>
                        </div>
                        <hr class="m-0">

                        <!-- Price section -->
                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>M.R.P </td></td>
                                <td><strike>&#8377;<?php echo $item['item_price']+1999?></strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Deal Price</td>
                                <td class=" "><span class="text-danger font-size-20">&nbsp;&nbsp;&#8377;<?php echo $item['item_price'] ?? "19999"; ?></span><small class="font-size-12 text-dark">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>You Saved</td>
                                <td class=" "><span>&nbsp;&nbsp;&#8377;1999</span></td>
                            </tr>
                            <tr class="font-rale font-size-16">
                                <td><b><span class="text-warning">Flipkart Price&nbsp;</span>:&nbsp;&nbsp;&nbsp;&#8377;<?php echo $item['F_price']?></b></td>
                            </tr>
                            </tr>
                            <tr class="font-rale font-size-16">
                                <td><b><span class="text-info">Amazon Price&nbsp;</span>:&nbsp;&nbsp;&nbsp;&#8377;<?php echo $item['F_price']?></b></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td><b><span class="text-success">Items in Stock&nbsp;</span>:&nbsp;&nbsp;&nbsp;<?php echo $item['Stock']?></b></td>
                            </tr>
                        </table>
                        <!-- End Price section -->

                        <!-- policy -->
                         
                            <div class="policy">
                                <div class="d-flex">
                                    <div class="return text-center" style="margin-right: 5rem;">
                                        <div class="font-size-20 my-2 text-primary">
                                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12 no_deco">10Days <br>Replacement</a>
                                    </div>
                                    <div class="return text-center " style="margin-right: 5rem;">
                                        <div class="font-size-20 my-2 text-primary">
                                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12 no_deco">Smart Shop <br>Deliver</a>
                                    </div>
                                    <div class="return text-center " style="margin-right: 5rem;">
                                        <div class="font-size-20 my-2 text-primary">
                                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12 no_deco">1 Year <br>Warrenty</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        <!-- End policy -->

                        <!-- Order Details -->

                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery</small>
                            <small>Sold by <a href="#" class="no_deco">Smart Electronics</a>&nbsp;&nbsp;(4.0 out of 5|12,987 ratings)</small>
                            <small ><i class="fas fa-map-marker-alt text-primary"></i>&nbsp;&nbsp;Deliver to customer - 570008</small>
                        </div>

                        <!-- End Order Details -->
                           <!-- Quantity Section -->
                         
                        <div class="row">
                            <div class="col-">
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty :</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!-- End Quantity Section -->


                        <!-- Size -->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size :</h6>
                            <div class="d-flex justify-cintent-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="mx-2 btn p-0">4GB RAM</button>
                                </div>
                                <div class="mx-3 font-rubik border p-2">
                                    <button class="mx-2 btn p-0">6GB RAM</button>
                                </div>
                                <div class="mx-3 font-rubik border p-2">
                                    <button class="mx-2 btn p-0">8GB RAM</button>
                                </div>
                            </div>
                        </div>

                        <!--End Size -->
                    </div>
                   <div class="col-12">
                    <h6 class="font-rubik">Product Description</h6>
                    <hr>
                    <p class="font-rale font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, maiores. Sed aspernatur in error facere officiis. Dolorem, laborum blanditiis optio atque veritatis soluta delectus porro, tenetur, ratione temporibus aspernatur dolores.</p>
                    <p class="font-rale font-size-14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, maiores. Sed aspernatur in error facere officiis. Dolorem, laborum blanditiis optio atque veritatis soluta delectus porro, tenetur, ratione temporibus aspernatur dolores.</p>
                   </div>
                
                </div>
            </div>
        </section>
<?php
        endif;
        endforeach;
?>
        <!--End Product Section -->