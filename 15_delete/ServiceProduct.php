<?php


class ServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function list()
    {
        $query = "Select * from `products`";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function save()
    {
        $query = "Insert into `products` (`name`,`desc`) VALUES (:name,:desc)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":name",$this->product->getName());
        $stmt->bindValue(":desc",$this->product->getDesc());
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function update()
    {
        $query = "Update `products` set `name`=?, `desc`=? WHERE `id`=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1,$this->product->getName());
        $stmt->bindValue(2,$this->product->getDesc());
        $stmt->bindValue(3,$this->product->getId());
        $ret = $stmt->execute();
        return $ret;
    }

    public function delete(int $id)
    {
        $query = "Delete from `products` WHERE `id`=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id",$id);
        $ret = $stmt->execute();
        return $ret;
    }
}