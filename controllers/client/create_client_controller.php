<?php

require_once __DIR__ ."/../../config/db_config.php";
include_once __DIR__ . "/../../models/client.php";


if(isset($_POST['add_client'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    if($name && $email && $phone && $dob && $address){
        $customer = new Client($name, $email, $phone, $dob, $address);
        $result = $customer->create_client($db);
        if($result){
            $message = "Client created done";
        }else{
            $error = "There was an error";
        }
    }
}

include_once __DIR__ . "/../../views/pages/client/create_client.view.php";