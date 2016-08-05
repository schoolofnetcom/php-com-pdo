<?php

try{
    $conn = new \PDO("mysql:host=localhost;dbname=est_oo","root","root");
}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}

