<?php

class Order{
    public $client_id;
    public $status_id;
    public $total;

    public function __construct($client_id, $status_id, $total) 
    {
        $this->client_id = $client_id;
        $this->status_id = $status_id;
        $this->total = $total;
    }

    // Create Order
    public function create_order($db)
    {
        $statement = $db->prepare("insert into orders(client_id, status_id, total) values(?, ?, ?)");
        $statement->bind_param("iid", $this->client_id, $this->status_id, $this->total);
        return $statement->execute();
    }
    // Get Single Order
    public static function get_single_order($id, $db)
    {
        $statement = $db->prepare("select * from orders where id = :id");
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        if($result){
            $order = $result->fetch_object();
            return $order;
        }else{
            return [];
        }
    }
    // Get Orders
    public static function get_orders($db)
    {
        $statement = $db->prepare("select * from orders");
        $statement->execute();
        $result = $statement->get_result();
        if($result){
            $orders = $result->fetch_all(MYSQLI_ASSOC);
            return $orders;
        }else{
            return [];
        }
    }

    // Update Order
    public function update_order($id, $db)
    {
        $statement = $db->prepare("update orders set client_id = :client_id, status_id = :status_id where id = :id");
        $statement->bind_param("iii", $this->client_id, $this->status_id, $id);
        return $statement->execute();
    }

    // Delete order
    public static function delete_order($id, $db)
    {
        $statement = $db->prepare("delete from orders where id = :id");
        $statement->bind_param("i", $id);
        $statement->execute();
    }

}