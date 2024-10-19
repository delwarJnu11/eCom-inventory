<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/category.php";

$categories = Category::get_categories($db);

include_once __DIR__ . "/../../views/pages/category/display_category.view.php";