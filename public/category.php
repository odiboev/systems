<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <!-- <header class="jumbotron hero-spacer">
            <h1>Smartwatches for all tastes</h1>
            <p>Connect to your phone in a whole new way with a smart watch. Smart watches allow you to do so much more than just tell the time, with a smart watch you can receive smart phone notifications directly to your wrist, perfect for if you're on the move or in a meeting so you can quickly check to see who's trying to contact you without having to pull out your phone.</p>
            <p>Enjoy online shopping expereince with Round and Round. </p>
            <!- <p><a class="btn btn-primary btn-large">Call to action!</a> ->
            </p>
        </header> -->

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Watches:</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

         <?php get_products_in_cat_page(); ?>


        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
