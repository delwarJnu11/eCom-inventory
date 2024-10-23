<?php

class Stock{
    public $product_id;
    public $quantity;
    public $transaction_type_id;
    public $warehouse_id;

    public function __construct($product_id, $qty, $transaction_type_id, $warehouse_id)
    {
        $this->product_id = $product_id;
        $this->quantity = $qty;
        $this->transaction_type_id = $transaction_type_id;
        $this->warehouse_id = $warehouse_id;
    }

    // Create Stock
    public function create_stock($db)
    {
        $statement = $db->prepare("insert into stock(product_id, quantity, transaction_type_id, warehouse_id)values(?, ?, ?, ?)");
        $statement->bind_param("iiii", $this->product_id, $this->quantity, $this->transaction_type_id, $this->warehouse_id);

        return $statement->execute();
    }

    // Display Stocks
    public static function get_stocks($db)
    {
        $statement = $db->prepare("SELECT s.*,p.product_name, t.name, t.factor, w.warehouse_name, w.location FROM stock s JOIN products p ON s.product_id = p.id JOIN transaction_type t ON s.transaction_type_id = t.id JOIN warehouse w ON s.warehouse_id = w.id");
        $statement->execute();
        $result = $statement->get_result();
        if($result){
            $stocks = $result->fetch_all(MYSQLI_ASSOC);
            return $stocks;
        }else{
            return [];
        }
    }


}