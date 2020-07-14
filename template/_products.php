<?php
if(isset($_GET['item_id'])){
    $id=$_GET['item_id'];
    $productArr = $product->getData();
    $specificProduct = $productArr[$id-1];
}
else{
    header('location:./index.php');
    exit();
}
?>
<main id="main-site">
        <!-- PRODUCT -->
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $specificProduct['item_image']?>" class="img-fluid">
                        <div class="form-row pt-4 font-size-16-font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-warning form-control">add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $specificProduct['item_name']?></h5>
                        <small>by <?php echo $specificProduct['item_brand']?></small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-20">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale">20,534 ratings | 1000+ comments</a>
                        </div>
                        <hr>
                        <!-- PRODUCT PRICE -->
                        <table>
                            <tr>
                                <td>M.R.P</td>
                                <td><strike>$162</strike></td>
                            </tr>
                            <tr>
                                <td>Deal Price </td>
                                <td class="font-size-20 text-danger"><?php echo $specificProduct['item_price']?> <small class="text-dark">&nbsp;&nbsp;inclusive of all taxes</small></td>
                            </tr>
                            <tr>
                                <td>You Save:</td>
                                <td class="font-size-20 text-danger">$10</td>
                            </tr>
                        </table>

                        <!-- PRODUCT PRICE -->
                        <!-- POLICY -->
                        <div class="row">
                            <div class="col">
                                <div>
                                    <i class="fas fa-retweet border p-3 rounded-pill text-primary d-inline-block"></i>
                                </div>
                                <a href="#" class="font-rale font-size-14">10 days <br>replacement</a>
                            </div>
                            <div class="col">
                                <div>
                                    <i class="fas fa-truck border p-3 rounded-pill text-primary d-inline-block"></i>
                                </div>
                                <a href="#" class="font-rale font-size-14">Daily Tuition <br> Delivered</a>
                            </div>
                            <div class="col">
                                <div>
                                    <i class="fas fa-check-double border p-3 rounded-pill text-primary d-inline-block"></i>
                                </div>
                                <a href="#" class="font-rale font-size-14">Year <br>Guarantee</a>
                            </div>
                        </div>
                        <hr>
                        <!-- POLICY -->
                        <!-- ORDER-DETAILS -->
                        <div id="order-datails" class="font-rale d-flex flex-column text-dark">
                            <small>Delivery by : mar 29 - Apr 1</small>
                            <small>sold By <a href="#">daily Electronics</a>4.5 out of 5 | 18,198 ratings</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp; deliver to Customer - 424201</small>
                    </div>
                     <!-- ORDER-DETAILS -->
                     <div class="row">
                         <div class="col-6">
                             <!-- COLOR -->
                             <div class="color my-3">
                                 <div class="d-flex">
                                    <h6>Color:</h6>
                                    <div class="color-yellow-bg rounded-circle p-2 ml-3"><button class="btn font-size-14"></button></div>
                                    <div class="bg-info rounded-circle p-2 ml-3"><button class="btn font-size-14"></button></div>
                                    <div class="bg-dark rounded-circle p-2 ml-3"><button class="btn font-size-14"></button></div>
                                 </div>

                             </div>
                             <!-- COLOR -->
                         </div>
                         <div class="col-6">
                             <div class="qty d-flex">
                                 <h6 class="font-baloo">Qty:</h6>
                                 <div class="font-rale">
                                     <button class="qty-up border bg-light" data-id="<?php echo $specificProduct['item_id']?>"><i class="fas fa-angle-up"></i></button>
                                     <input type="text" class="qty-input w-50" disabled value="1" data-id="<?php echo $specificProduct['item_id']?>">
                                     <button class="qty-down border bg-light"><i class="fas fa-angle-down" data-id="<?php echo $specificProduct['item_id']?>"></i></button>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <hr>
                     <!-- SIZE_FOR_RAM -->
                     <div class="col">
                         <h6>Size:</h6>
                         <div class="d-flex justify-content-center">
                             <span class="p-2 border m-2">4GB RAM</span>
                             <span class="p-2 border m-2">4GB RAM</span>
                             <span class="p-2 border m-2">4GB RAM</span>
                         </div>
                     </div>
                     <!-- SIZE_FOR_RAM -->
                </div>
            </div>
            <hr>
            <div class="col-12">
                <h6 class="font-rubik font-size-20">Product description:</h6>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Susci
                    pit optio reprehenderit modi libero ullam voluptatibus iste voluptas
                    sapiente fugiat, ratione excepturi vitae dolore consequuntur odit? Unde
                     illum earum voluptate quia.</span>
            </div>
        </section>
        <!-- PRODUCT -->
    </main>