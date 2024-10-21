<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/unit_measurement.php";

if(isset($_POST['add_measurement'])){
    $unit_name = htmlentities($_POST['measurement']);

    if($unit_name){
        $measurement = new UnitMeasurement($unit_name);
        $result = $measurement->create_unit_measurement($db);
        if($result){
            $message = "Measurement created successfully done!";
        }else{
            $error = "There was an error occured!";
        }
    }
}

include_once __DIR__ . "/../../views/pages/measurements/create_measurement.view.php";