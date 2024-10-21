<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/status.php";

if(isset($_POST['add_status'])){
    $status_name = htmlspecialchars($_POST['status']);

    if($status_name){
        $status = new Status($status_name);
        $result = $status->create_status($db);
        if($result){
            $message = "Status created successfully done!";
        }else{
            $error = "There was an error occured!";
        }
    }
}

include_once __DIR__ . "/../../views/pages/status/create_status.view.php";