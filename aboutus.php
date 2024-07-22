<?php
require('./includes/common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us | Shoe Emporium</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .content-section {
            padding: 50px 0;
        }

        .content-section .row {
            display: flex;
            align-items: center;
        }

        .content-section img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .content-section h3,
        .content-section h4 {
            color: #333;
            font-weight: bold;
        }

        .content-section h3 mark,
        .content-section h4 mark {
            background-color: #f1c40f;
            padding: 0.2em;
        }

        .content-section p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .content-section ul {
            padding-left: 20px;
            margin-top: 20px;
        }

        .content-section ul li {
            margin-bottom: 10px;
            list-style: none;
            position: relative;
            padding-left: 20px;
        }

        .content-section ul li::before {
            content: "\2022"; /* Bullet symbol */
            color: #3498db; /* Custom color for bullets */
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 0;
        }

        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 40px;
        }

        .logo-container img {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }

        .logo-container h1 {
            font-size: 2.5em;
            font-weight: bold;
            color: #2c3e50;
            margin: 0;
        }
    </style>

    <!-- jQuery and Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="container content-section" id="content">
        <div class="logo-container">
            <img src="img/Logo.jpg" alt="Shoe Emporium Logo">
            <h1>Shoe Emporium</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3>WHO WE ARE</h3>
                <p>Shoe Emporium is a recognized leader in the ecommerce industry, with a steadfast commitment to success and a record of achievement that continues a tradition of delivering excellence. Guided by four principles—customer obsession, passion for invention, commitment to operational excellence, and long-term thinking—Shoe Emporium consistently strives to elevate the shopping experience for our customers.</p>
                <h4>Vision</h4>
                <p>To make the world a more stylish, colorful and happier place.</p>
                <h4>Mission</h4>
                <p>We strive to offer our customers the lowest possible prices, the best available selection, and the utmost convenience.</p>
            </div>
            <div class="col-lg-6">
                <h3>BUILDING THE FUTURE</h3>
                <p>At Shoe Emporium, we are dedicated to making a positive impact on our customers, employees, small businesses, the economy, and our communities. Our team comprises smart, passionate builders with diverse backgrounds and goals, united by a common desire to continuously learn and innovate on behalf of our customers.</p>
                <ul>
                    <li><strong>Market development:</strong> Our Focus is on entry and growth in new markets.</li>
                    <li><strong>Market Penetration:</strong> We aim to generate more revenue from markets where the company currently operates.</li>
                    <li><strong>Product Development:</strong> Our goal is to develop and offer new products to gain higher revenues.</li>
                    <li><strong>Diversification:</strong> Our objective is to achieve growth based on new business.</li>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>
