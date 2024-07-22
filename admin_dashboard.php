<?php
// Start session and include necessary files
require("includes/common.php");

// Redirect to login page if admin is not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Logout functionality
if (isset($_GET['logout']) && $_GET['logout'] == true) {
    unset($_SESSION['admin']);
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container" style="margin-top: 50px;height:100vh">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Welcome, Admin!</h2>
                <hr>
                <ul>
                    <li><a href="add_product.php">Add Products</a></li>
                    <li><a href="view_products.php">View Products</a></li>
                    <li><a href="view_orders.php">View Orders</a></li>
                    <li><a href="delete_product.php">Delete Products</a></li>
                    <li><a href="admin_dashboard.php?logout=true">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
