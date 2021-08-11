<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/icon.png">
    <title>ChiChu</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>
</head>

<body>

<!--navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home.php">ChiChu</a>
        <img src="./assets/img/logo.jpg" alt="logo-icon">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fal fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="./home.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Jewelry</a></li>
                        <li><a class="dropdown-item" href="#">Bags</a></li>
                        <li><a class="dropdown-item" href="#">Sneakers</a></li>
                        <li><a class="dropdown-item" href="#">Dress</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="https://tinyurl.com/3w3u7zde">Blog</a></li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">
                        <span><i class="fal fa-user"></i></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <span><i class="fas fa-heart"></i></span>
                        <span class="badge badge-pill bg-danger"><?php echo count($product->getData('wishlist')); ?></span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="cart.php">
                        <span><i class="fas fa-shopping-cart pl-0"></i></span>
                        <span class="badge badge-pill bg-danger"><?php echo count($product->getData('cart')); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
