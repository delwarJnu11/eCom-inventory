<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/product.php";
include_once __DIR__. "/../../models/category.php";
include_once __DIR__. "/../../models/unit_measurement.php";

$categories = Category::get_categories($db);
$measurements = UnitMeasurement::get_all_unit_measurement($db);


include_once __DIR__ ."/../../views/pages/products/create_product.view.php";


if(isset($_POST['add_product_btn'])){
    $name = htmlspecialchars($_POST['product_name']);
    $category_id = htmlspecialchars($_POST['category_id']);
    $unit_price = htmlspecialchars($_POST['unit_price']);
    $barcode = htmlspecialchars($_POST['barcode']);
    $uom_id = htmlspecialchars($_POST['uom_id']);

    if($name && $category_id && $unit_price && $barcode && $uom_id){
        $product = new Product($name, $category_id, $unit_price,$barcode, $uom_id);
        $result = $product->create_product($db);
        if($result){
            echo "Prodcut added successfully done!";
        }else{
            echo "There was an error occured!";
        }
    }
}