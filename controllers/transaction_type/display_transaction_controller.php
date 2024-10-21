<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/transaction_type.php";

$transaction_types = TransactionType::get_all_transaction_type($db);

include_once __DIR__ . "/../../views/pages/transaction_type/display_transaction_type.view.php";