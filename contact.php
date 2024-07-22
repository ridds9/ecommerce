<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Shoe Emporium</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container" id="content">
    <div class="row">
    
    <div class=O"col-lg">
        <div >
            <h1>COMPANY INFORMATION</h1><br>
            <p id="p1">Address :<a href="https://www.google.com/maps/search/Hustlehub+Techpark,+64,+27th+Main+Road+1st+Sector,+HSR+Layout,+36%2F5,+village,+Somasundarapalya,+harlurkunte,+Bengaluru,+Karnataka+560102/@12.9068086,77.6377465,15z/data=!3m1!4b1?entry=ttu"> Hustlehub Techpark, 64, 27th Main Road 1st Sector, HSR Layout, 36/5, village, Somasundarapalya, harlurkunte, Bengaluru, Karnataka 560102</a></p><br>
            <p id="p1">Phone : <a href="tel:+91 9123400852">+91 9123400852</a> </p><br>
            <p id="p1">Email :<a href="mailto:support@acmegrade.com"> support@acmegrade.com</a></p><br>

        </div>
        <!-- <h1>CONTACT US</h1> -->
        <!-- <div style="float: left;"> -->
        <form>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>