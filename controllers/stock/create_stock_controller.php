<?php

require_once __DIR__ . "/../../config/db_config.php";
include_once __DIR__ . "/../../models/stock.php";
include_once __DIR__ . "/../../models/product.php";
include_once __DIR__ . "/../../models/transaction_type.php";
include_once __DIR__ . "/../../models/warehouse.php";

$products = Product::get_products($db);
$transaction_types = TransactionType::get_all_transaction_type($db);
$warehouses = WareHouse::get_all_warehouse($db);

if(isset($_POST['add_stock'])){
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $transaction_type_id = $_POST['transaction_type_id'];
    $warehouse_id = $_POST['warehouse_id'];

    if($product_id && $quantity && $transaction_type_id && $warehouse_id){
        $stock = new Stock($product_id, $quantity, $transaction_type_id, $warehouse_id);
        $result = $stock->create_stock($db);

        if($result){
            $message = "Stock add successfully done!";
        }else{
            $error = "There was an error occured!";
        }
    }
}

include_once __DIR__ . "/../../views/pages/stock/create_stock.view.php";