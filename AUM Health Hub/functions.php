<?php
//require mysql connection
require('Database/DBController.php');

//require product class
require('Database/productDB.php');

//require Cart class
require('Database/cartDB.php');

//require Order class
require('Database/orderDB.php');

//require Customer class
require('Database/customerDB.php');

//DBController object
$db = new DBController();

//Product object
$product = new productDB($db);
$product_item = $product->getData();

//cart object
$Cart = new Cart($db);

$Order = new Order($db);

$Customer = new Customer($db);