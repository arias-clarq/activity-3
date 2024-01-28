<?php

 $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Devops-02</title>
    <link rel="icon" type="image/x-icon" href="img/BE_logo.png">

    <!-- bootstrap plugins online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- \bootstrap plugins online -->

    <!-- css -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- icons -->
    <script src="https://kit.fontawesome.com/1a87f9db42.js" crossorigin="anonymous"></script>
    <!-- \icons -->
    <!-- Merriweather google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/sb-css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>



<!-- Navigation Bar with Gradient Tricolor Bottom Border -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex" href="index.php">
            <h3 class="brand-font-custom"><div class="text-uppercase">byte<span class="text-capitalize brand-color">boutique.</span></div></h3>
            <!-- Add a span for the small screen text -->
            <span class="brand-font-custom-small brand-font-custom"><div class="text-uppercase">byte<span class="text-capitalize brand-color">b.</span></div></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link <?= $page == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $page == 'AboutUs.php' ? 'active' : '' ?>" href="AboutUs.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $page == 'Products.php' ? 'active' : '' ?>" href="Products.php">Products</a>
                </li>

            </ul>
        </div>
    </div>

    <!-- Gradient border element -->
    <div class="navbar-gradient-border shadow"></div>
</nav>
<!--\ Navigation Bar with Gradient Tricolor Bottom Border -->
