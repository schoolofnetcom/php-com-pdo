<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

    $query = "select * from `products`";
    //$query = "Insert into `products` (`name`,`desc`) values ('eBook','Learn Javascript')";
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //echo $list[0]->name;
    print_r($list);

}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}

