<?php
require('./database/DBControlller.php');
require('./database/product.php');
require('./database/Cart.php');
$db = new DBController();
$product = new Product($db);
$Cart = new Cart($db);

