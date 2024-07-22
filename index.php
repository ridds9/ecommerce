<?php

//establish the connection to database, and start the session
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Welcome |  Shoe Emporium</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!-- Main banner video -->
        <div id="banner_video">
            <video autoplay muted loop id="background_video">
                <source src="img\banner1.mp4" type="video/mp4">
            </video>
            <div class="container1 container"> 
                <center>
                    <div id="banner_content">
                        <h1>Walk in Style.</h1>
                        <p>Flat 20% OFF on premium shoes</p>
                        <br/>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <!-- Main banner video end -->


            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#shoes" >
                            <div class="thumbnail">
                                <img src="img/jordans.jpg" alt="">
                                <div class="caption">
                                    <h3>Jordans</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shoes" >
                            <div class="thumbnail">
                                <img src="img/dunk lows.jpg" alt="">
                                <div class="caption">
                                    <h3>Dunk Lows</h3>
                                    <p>Original shoes from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shoes" >
                            <div class="thumbnail">
                                <img src="img/dunk high.jpg" alt="">
                                <div class="caption">
                                    <h3>Dunk Highs</h3>
                                    <p>Our exquisite collection of shoes.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>