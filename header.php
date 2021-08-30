<?php
session_start();
include ('helper.php');
?>

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
    <style>
        .dropbtn {
            /*color: white;*/
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        .drop {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {background-color: rgba(245, 178, 178, 0.7);}
        .drop:hover .dropdown-content {display: block;}
    </style>
</head>
<?php
$user = array();
if (isset($_SESSION['userID'])){
    $con = new mysqli("localhost", "root", "", "shopping");
    $user = get_user_info($con,$_SESSION['userID']);
}
?>

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

                <li class="nav-item">
                    <div class="drop nav-link">
                        <span>Product<i class="fas fa-caret-down"></i></span>
                        <div class="dropdown-content">
                            <a href="./home.php#jewelry">Jewelry</a>
                            <a href="./home.php#bags">Bags</a>
                            <a href="./home.php#sneakers">Sneakers</a>
                            <a href="./home.php#dress">Dress</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" target="_blank" rel="noopener noreferrer" href="https://tinyurl.com/3w3u7zde">Blog</a></li>

                <li class="nav-item">
                    <a class="nav-link" href="./home.php#pageBottom">Contact Us</a>
                </li>

                <li class="nav-item">
                    <div class="drop">
                        <span><i class="dropbtn fal fa-user"></i></span>
                        <div class="dropdown-content">
                            <?php
                            if (isset($user['lastName']) && $_SESSION['lastName']) {
                                printf("Hi\t %s %s" ,$user['firstName'],$user['lastName']);
                            echo '<a href ="logout.php">Log Out</a >';
                            } else {
                                echo '<a href="login.php">Login</a>';
                            }
                            ?>
                        </div>
                    </div>
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
