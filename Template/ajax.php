<?php

// require MySQL Connection
require ('../database/DBController.php');

// require MySQL Connection
require ('../database/Product.php');


// DBController object
$db = new DBController();

$product = new Product(($db));

// ajax increase , reduce price
if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}