<?php
// Start session and include necessary files
require("includes/common.php");

// Redirect to login page if admin is not logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

// Initialize variables
$name = $price = $error = $image = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars($_POST['name']);
    $price = intval($_POST['price']);
    $image = $_FILES['image'];

    // Validate input fields (you can add more validation as per your requirements)
    if (empty($name) || empty($price) || empty($image['name'])) {
        $error = "All fields are required";
    } else {
        // Image upload path
        $target_dir = "img/";
        $target_file = $target_dir . basename($image['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        $check = getimagesize($image['tmp_name']);
        if ($check === false) {
            $error = "File is not an image.";
        }

        // Check file size (5MB max)
        if ($image['size'] > 5000000) {
            $error = "Sorry, your file is too large.";
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }

        // Check if there were no errors
        if (empty($error)) {
            if (move_uploaded_file($image['tmp_name'], $target_file)) {
                // Insert product into database
                $query = "INSERT INTO items (name, price, image) VALUES ('$name', $price, '$target_file')";
                $result = mysqli_query($con, $query);

                if ($result) {
                    $success = "Product added successfully!";
                } else {
                    $error = "Error adding product. Please try again.";
                }
            } else {
                $error = "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container" style="margin-top: 50px;height:100vh">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Add New Product</h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Product Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image:</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <?php if(isset($error)) { ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php } ?>
                    <?php if(isset($success)) { ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary btn-block">Add Product</button>
                </form>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
