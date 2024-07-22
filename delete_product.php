<?php
// Start session and include necessary files
require("includes/common.php");

// Redirect to login page if admin is not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Initialize variables
$product_id = $error = $success = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $product_id = intval($_POST['product_id']);

    if (empty($product_id)) {
        $error = "Product ID is required";
    } else {
        // Fetch the product details (to get the image path)
        $query = "SELECT * FROM items WHERE id = $product_id";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 1) {
            $product = mysqli_fetch_assoc($result);
            $image_path = $product['image'];

            // Delete the product from the database
            $query = "DELETE FROM items WHERE id = $product_id";
            $result = mysqli_query($con, $query);

            if ($result) {
                // Optionally, delete the image file
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $success = "Product deleted successfully";
            } else {
                $error = "Error deleting product";
            }
        } else {
            $error = "Product not found";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container" style="margin-top: 50px;height:100vh">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Delete Product</h2>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="product_id">Product ID:</label>
                        <input type="number" class="form-control" id="product_id" name="product_id" required>
                    </div>
                    <?php if(isset($error)) { ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php } ?>
                    <?php if(isset($success)) { ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary btn-block">Delete Product</button>
                </form>
                <a href="view_products.php" class="btn btn-primary" style="margin-top: 20px;">Back to Products</a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
