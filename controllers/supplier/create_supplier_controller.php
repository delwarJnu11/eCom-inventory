<?php

require_once __DIR__ ."/../../config/db_config.php";
include_once __DIR__ . "/../../models/suppliers.php";

if(isset($_POST['add_supplier'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    if($name && $email && $phone && $dob && $address){
        $customer = new Supplier($name, $email, $phone, $dob, $address);
        $result = $customer->create_supplier($db);
        if($result){
            $message = "Supplier created done";
        }else{
            $error = "There was an error";
        }
    }
}
include_once __DIR__ . "/../../views/pages/supplier/create_supplier.view.php";