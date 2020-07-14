
<!-- HEADER -->
<?php
ob_start();
   include('header.php')
?>
<!-- HEADER -->
    <!-- main -->
    <main id="main-site">
        <!-- OWL-carousel -->
        <?php
           include('./template/_banner-area.php');
        ?>
        <!-- OWL-carousel -->
        <!-- TOP SALE -->
        <?php
           include('./template/_top-sale.php');
        ?>
        <!-- TOP SALE -->
        <!-- SPECIAL-PRICE -->
        <?php
           include('./template/_special-price.php');
        ?>
        <!-- SPECIAL-PRICE -->
    </main>
    <!-- main -->


<!-- FOOTER -->
<?php
   include('footer.php');
?>
<!-- FOOTER -->