<?php
    // require MySQL Connection
    require ('database/DBController.php');

    // require MySQL Connection
    require ('database/Product.php');

    // require Cart class
    require ('database/Cart.php');
    // DBController object
    $db = new DBController();

    // Product object
    $product = new Product($db);
    $product_jewelry = $product->getDataJewelry();
    $product_bags = $product->getDataBags();
    $product_sneakers = $product->getDataSneakers();
    $product_dress = $product->getDataDress();
    // cart object
    $Cart = new Cart($db);
