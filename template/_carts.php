<?php
if(isset($_POST['delete-from-cart'])){
    $id = $_POST['item_id'];
    $Cart->deleteProduct($id,'cart');
    header('location:./cart.php');
    exit();

}
?>
<main id="main-site">
      <section id="cart" class="py-3">
          <div class="container-fluid w-75">
              <h5 class="font-size-20 font-baloo">Shopping Cart</h5>
              <!-- SHOPPING CART ITEMS -->
              <div class="row">
                  <div class="col-sm-9">
                      <!-- each mobile -->
                      <?php
                      $totalSub = 0;
                         foreach($product->getData('cart') as $item):
                           $result = $product->getProduct($item['item_id']);
                           $totalSub+=$result[0]['item_price'];
                      ?>
                      <div class="row border-top py-3">
                          <div class="col-sm-2">
                              <img src=<?php echo $result[0]['item_image']?> style="height:120px" class="img-fluid">
                          </div>
                          <div class="col-sm-8">
                              <h5 class="font-size-16 font-baloo"><?php echo $result[0]['item_name']?></h5>
                              <small><?php echo $result[0]['item_brand']?></small>
                              <div class="d-flex">
                                <div class="rating text-warning font-size-20">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <a href="#" class="px-2 font-rale">20,00 ratings</a>
                              </div>
                              <div class="qty d-flex">
                                <div class="font-rale py-2">
                                    <button class="qty-up border bg-light" data-id="<?php echo $result[0]['item_id']?>"><i class="fas fa-angle-up"></i></button>
                                    <input type="text" class="qty-input w-50" disabled value="1" data-id="<?php echo $result[0]['item_id']?>">
                                    <button class="qty-down border bg-light" data-id="<?php echo $result[0]['item_id']?>"><i class="fas fa-angle-down"></i></button>
                                </div>
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $result[0]['item_id']?>">
                                    <button class="btn text-danger font-baloo border-right" name='delete-from-cart'>Delete</button>
                                </form>

                                <button type="submit" class="btn text-danger font-baloo">Save for Later</button>
                            </div>
                          </div>
                          <div class="col-sm-2">
                              <div class="font-size-20 text-danger font-baloo text-right">
                                  $<span class="product_price"><?php echo $result[0]['item_price']?></span>
                              </div>
                          </div>
                      </div>
                         <?php endforeach;?>
                        <!-- each mobile -->
                  </div>
                  <!-- FOR SUBTOTAL -->
                  <div class="col-sm-3">
                      <div class="item border text-center">
                          <div class="text py-2">
                          <span class="text-success font-size-12 font-rale"><i class="fas fa-check-circle"></i>&nbsp; &nbsp;your order is editable by free delivery</span>
                         </div>
                         <hr>
                         <div class="second-text py-3">
                             <h5>Subtottal(2 items):$ <span class="text-danger"><?php echo $totalSub?></span></h5>
                             <button type="submit" class="btn text-dark btn-warning">Proceed to buy</button>
                         </div>
                      </div>
                  </div>
                  <!-- FOR SUBTOTAL -->
              </div>
              <!-- SHOPPING CART ITEMS -->

          </div>
      </section>
    </main>