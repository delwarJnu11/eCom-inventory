<?php

class OrderDetails{
    public $order_id;
    public $product_id;
    public $qty;
    public $unit_price;

    public function __construct($order_id, $product_id, $qty, $unit_price)
    {
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->qty = $qty;
        $this->unit_price = $unit_price;
    }

    
}