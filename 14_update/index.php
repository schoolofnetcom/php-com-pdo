<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";


$db = new Conn("localhost","test_oo","root","root");
$product = new Product;

$product->setId(1)
        ->setName("PHP Course 222")
        ->setDesc("PHP course at the School Of Net 2222");

$service = new ServiceProduct($db,$product);


print_r($service->update());

