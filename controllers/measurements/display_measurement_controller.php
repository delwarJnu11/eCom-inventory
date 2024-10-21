<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/unit_measurement.php";

$measurements = UnitMeasurement::get_all_unit_measurement($db);

include_once __DIR__ . "/../../views/pages/measurements/display_measurement.view.php";