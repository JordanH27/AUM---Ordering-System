<?php

// require MySQL Connection
require ('../database/DBController.php');

// require Product Class
require ('../database/productDB.php');

// DBController object
$db = new DBController();

// Product object
$product = new productDB($db);

if (isset($_POST['productID'])){
    $result = $product->getProduct($_POST['productID']);
    echo json_encode($result);
}