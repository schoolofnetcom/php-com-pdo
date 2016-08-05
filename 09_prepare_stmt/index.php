<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

    $query = "select * from `products` where id=:id";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id',$_GET['id']);
    $stmt->execute();

    print_r($stmt->fetchAll());



}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}

