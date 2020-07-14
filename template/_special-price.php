<?php
   $brand = array_map(function($pro){return $pro['item_brand'];},$productArr);
   $brands = array_unique($brand);
   if(isset($_POST['special-price-submit'])){
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
}
?>
<section id="special-price">
            <div class="container">
                <h4 class="font-rubik font-size-20">Special Price</h4>
                <div id="filters" class="button-group text-right">
                    <button class="btn is-checked" data-filter='*'>All Brand</button>
                    <?php foreach($brands as $key=>$value):?>
                        <button class="btn" data-filter='.<?php echo$value?>'><?php echo$value?></button>
                    <?php endforeach;?>
                </div>
                <hr>
                <div class="grid">
                <?php foreach($productArr as $key=>$value):?>
                        <div class="grid-item <?php echo $value['item_brand'];?> border">
                        <div class="item" style="width:200px">
                            <div class="product font-rale">
                            <a href="./product.php?item_id=<?php echo $value['item_id']?>"><img src="<?php echo $value['item_image']?>" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $value['item_name'];?></h6>
                                <div class="rating text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="price py-2">
                                    <span><?php echo $value['item_price']?></span>
                                </div>
                                <form method="POST">
                                     <input type="hidden" name="item_id" value="<?php echo $value['item_id'];?>">
                                     <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                     <button class="btn btn-warning font-size-14" type="submit" name='special-price-submit'>add to Cart</button>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>

                </div>
            </div>
        </section>