<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/warehouse.php";

$warehouses = WareHouse::get_all_warehouse($db);

include_once __DIR__ . "/../../views/pages/warehouse/display_warehouse.view.php";