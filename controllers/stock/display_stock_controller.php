<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/stock.php";

$stocks = Stock::get_stocks($db);

include_once __DIR__ . "/../../views/pages/stock/display_stock.view.php";