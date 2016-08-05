<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

    //$query = "select * from `products`";
    $query = "Insert into `products` (`name`,`desc`) values ('eBook','Learn Javascript')";
    $ret = $conn->exec($query);
    print_r($ret);

}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}

