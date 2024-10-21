<?php

require_once __DIR__ . "/../../config/db_config.php";
include_once __DIR__ . "/../../models/warehouse.php";


if(isset($_POST['add_warehouse'])){
    $name = $_POST['warehouse_name'];
    $location = $_POST['location'];
    $capacity = $_POST['capacity'];

    if($name && $location && $capacity)
    {
        $warehouse = new WareHouse($name, $location, $capacity);
        $result = $warehouse->create_warehouse($db);
        if($result){
            $message = "Warehouse created successfully done!";
        }else{
            $error = "There was an error occured!";
        }
    }
}

include_once __DIR__ . "/../../views/pages/warehouse/create_warehouse.view.php";