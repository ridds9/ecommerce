<?php
// Establish the connection to the database, and start the session
require ("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | Shoe Emporium</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <div class="container" id="content">
        <div class="jumbotron home-spacer" id="products-jumbotron">
            <h1>Welcome to our Shoe Emporium!</h1>
            <p>We have the best shoes for you. No need to hunt around, we have all in one place.</p>
        </div>
        <hr>

        <div class="row text-center" id="shoes">
            <?php
            // Query to fetch products from the database
            $query = "SELECT id, name, price, image FROM items";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                // Loop through products and display them in rows
                $index = 0;
                while ($product = mysqli_fetch_assoc($result)) {
                    if ($index % 4 == 0) {
                        if ($index != 0)
                            echo '</div>'; // Close previous row if it's not the first row
                        echo '<div class="row text-center">'; // Start new row
                    }
                    
                    echo '<div class="col-md-3 col-sm-6 home-feature">';
                    echo '<div class="thumbnail">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<div class="caption">';
                    echo '<h3>' . $product['name'] . '</h3>';
                    echo '<p>Price: Rs. ' . $product['price'] . '.00 </p>';
                    if (!isset($_SESSION['email'])) {
                        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
                    } else {
                        if (check_if_added_to_cart($product['id'])) {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else {
                            echo '<a href="cart-add.php?id=' . $product['id'] . '" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    
                    $index++;
                }
                echo '</div>'; // Close the last row
            } else {
                echo '<div class="col-md-12">';
                echo '<h3>No products available.</h3>';
                echo '</div>';
            }
            ?>
        </div>

        <hr>
    </div>

    <?php include ("includes/footer.php"); ?>
</body>

</html>
