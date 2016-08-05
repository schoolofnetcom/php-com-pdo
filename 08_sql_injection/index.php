<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");

    $query = "select * from `products` where id={$_GET['id']}";
    //$query = "Insert into `products` (`name`,`desc`) values ('eBook','Learn Javascript')";
    foreach($conn->query($query) as $product){
        echo $product['id'];
        echo "<br/>";
        echo $product['name'];
        echo "<br/>";
        echo $product['desc'];
        echo "<br/>";

    }


}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}

