<?php
require ('./includes/common.php');
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | Shoe Emporium</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        #signup-panel {
            width: 100%;
            max-width: 500px;
            margin: auto;
        }

        .panel-body {
            padding: 50px;
        }

        .panel-footer {
            background-color: #f1f1f1;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .form-control {
            border-radius: 5px;
        }


        .text-warning {
            font-size: 1.1em;
        }

        #content {
            flex-grow: 1;
        }

        footer {
            background-color: #20263e;
            color: #9d9d9d;
            padding: 10px 0;
            width: 100%;
            text-align: center;
            margin-top: auto;
            /* Ensure footer is at the bottom */
        }

        .footer-container {
            padding: 10px 0;
        }
    </style>

    <!-- jQuery and Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div id="signup-panel">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h4>SIGN UP</h4>
            </div>
            <div class="panel-body">
                <form id="signupForm" action="signup_script.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" placeholder="Name" autofocus="on" name="name" required
                            pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter a valid Email"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="e-mail" required>
                        <?php if (isset($_GET['m1']))
                            echo '<div class="text-warning">' . $_GET['m1'] . '</div>'; ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password"
                            title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Retype Password"
                            title="Please retype the password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            name="retype-password" id="retype-password" required>
                        <div class="text-warning" id="password-error" style="display: none;">Passwords do not match!</div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact (ex. 8444844863)" maxlength="10"
                            size="10" name="contact" required>
                        <?php if (isset($_GET['m2']))
                            echo '<div class="text-warning">' . $_GET['m2'] . '</div>'; ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="City" name="city" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="address" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
            <div class="panel-footer text-center">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script>
        document.getElementById('signupForm').addEventListener('submit', function (event) {
            var password = document.getElementById('password').value;
            var retypePassword = document.getElementById('retype-password').value;
            var passwordError = document.getElementById('password-error');

            if (password !== retypePassword) {
                passwordError.style.display = 'block';
                event.preventDefault(); // Prevent form submission
            } else {
                passwordError.style.display = 'none';
            }
        });
    </script>
</body>

</html>
