<?php

require_once __DIR__ ."/../../config/db_config.php";
include_once __DIR__ . "/../../models/client.php";

$customers = Client::get_clients($db);

include_once __DIR__ . "/../../views/pages/client/display_client.view.php";