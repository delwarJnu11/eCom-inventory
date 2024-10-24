<?php

require_once __DIR__ ."/../../config/db_config.php";
include_once __DIR__ . "/../../models/suppliers.php";

$suppliers = Supplier::get_suppliers($db);

include_once __DIR__ . "/../../views/pages/supplier/display_supplier.view.php";