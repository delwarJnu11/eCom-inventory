<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/product.php";

$products = Product::get_products($db);

include_once __DIR__ . "/../../views/pages/products/display_products.view.php";