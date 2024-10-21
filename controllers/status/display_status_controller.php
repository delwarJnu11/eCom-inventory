<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/status.php";

$all_status = Status::get_all_status($db);

include_once __DIR__ . "/../../views/pages/status/display_status.view.php";