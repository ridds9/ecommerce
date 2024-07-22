<?php
// Start session and include necessary files
require("includes/common.php");

// Redirect to login page if admin is not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch confirmed orders from database
$query = "SELECT u.name AS user_name, i.name AS item_name, ui.date_time 
          FROM user_item ui 
          INNER JOIN users u ON ui.user_id = u.id 
          INNER JOIN items i ON ui.item_id = i.id 
          WHERE ui.status = 'Confirmed'";
$result = mysqli_query($con, $query);

// Initialize order list variable
$orders = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $orders[] = $row;
    }
} else {
    $error = "Error fetching orders";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Order List</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Item Name</th>
                            <th>Date & Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order) { ?>
                            <tr>
                                <td><?php echo $order['user_name']; ?></td>
                                <td><?php echo $order['item_name']; ?></td>
                                <td><?php echo $order['date_time']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php if(isset($error)) { ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
