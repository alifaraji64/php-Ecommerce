<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2b0d01e607.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="./style.css">
    <title>Mobile Shopee</title>
    <?php
       //require musql connection
       require('./functions.php');
    ?>
</head>
<body>
    <!-- header -->
    <header id='header'>
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">Lorem ipsum dolor sit amet co
                nsecteturciltaellendus laboriosam nam rerum nisi.
            </p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">whishlist</a>
            </div>
        </div>
        <!-- NAVIGATION BAR -->
         <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
             <a href="#" class="navbar-brand">Mobile Shopee</a>
             <button class="navbar-toggler" type="button" data-toggle='collapse' data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav m-auto">
                     <li class="nav-item active">
                         <a href="#" class="nav-link">On Sale</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">Category</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">Products <i class="fas fa-chevron-down"></i> </a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">Blog</a>
                     </li>
                     <li class="nav-item">
                         <a href="#" class="nav-link">Category<i class="fas fa-chevron-down"></i></a>
                     </li>
                 </ul>
                 <form action="#" class="font-size-14 font-rale">
                     <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                         <span class="font-size-16 text-white"><i class="fas fa-shopping-cart"></i></span>
                         <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'))?></span>
                     </a>
                 </form>
             </div>
         </nav>
        <!-- NAVIGATION BAR -->
    </header>
    <!-- header -->