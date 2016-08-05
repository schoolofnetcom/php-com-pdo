<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

    $query = "select * from `products` order by id desc";
    //$query = "Insert into `products` (`name`,`desc`) values ('eBook','Learn Javascript')";
    $stmt = $conn->query($query);
    $list = $stmt->fetch(PDO::FETCH_OBJ);
    echo $list->name;
    //print_r($list);

}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}

