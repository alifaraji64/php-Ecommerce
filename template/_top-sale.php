<?php
$productArr = $product->getData();
if(isset($_POST['top-sale-submit'])){
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
}
?>
<section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Top Sale</h4>
                <hr>
                 <!-- OWL-carousel -->
                 <div class="owl-carousel owl-theme">
                      <?php foreach($productArr as $key=>$value): ?>
                        <div class="item py-5">
                         <div class="product font-rale">
                             <a href="./product.php?item_id=<?php echo $value['item_id']?>"><img src="<?php echo $value['item_image'] ?? './assets/products/1.png' ?>" class="img-fluid"></a>
                             <div class="text-center">
                                 <h6><?php echo $value['item_name'] ?? 'Unknown' ?></h6>
                                 <div class="rating text-warning">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="far fa-star"></i>
                                 </div>
                                 <div class="price py-2">
                                     <span><?php echo $value['item_price'] ?? '0' ?></span>
                                 </div>
                                 <form method="POST">
                                     <input type="hidden" name="item_id" value="<?php echo $value['item_id'];?>">
                                     <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                     <button class="btn btn-warning font-size-14" type="submit" name='top-sale-submit'>add to Cart</button>
                                 </form>

                             </div>
                         </div>
                     </div>
                      <?php endforeach; ?>

                 </div>
                 <!-- OWL-carousel -->
            </div>
        </section>