<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

    $query = "select * from `products`";
    //$query = "Insert into `products` (`name`,`desc`) values ('eBook','Learn Javascript')";
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll();
    echo $list[0][2];
    //print_r($list);

}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}

