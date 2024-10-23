<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    "/" => "controllers/home_controller.php",
    "/add_product" => "controllers/products/create_product_controller.php",
    "/products" => "controllers/products/display_products_controller.php",
    "/add_category" => "controllers/category/create_category_controller.php",
    "/categories" => "controllers/category/display_category_controller.php",
    "/add_measurement" => "controllers/measurements/create_measurement_controller.php",
    "/measurements" => "controllers/measurements/display_measurement_controller.php",
    "/add_status" => "controllers/status/create_status_controller.php",
    "/all_status" => "controllers/status/display_status_controller.php",
    "/add_transaction_type" => "controllers/transaction_type/create_transaction_type_controller.php",
    "/transaction_types" => "controllers/transaction_type/display_transaction_controller.php",
    "/add_warehouse" => "controllers/warehouse/create_warehouse_controller.php",
    "/warehouses" => "controllers/warehouse/display_warehouse_controller.php",
    "/add_stock" => "controllers/stock/create_stock_controller.php",
    "/stocks" => "controllers/stock/display_stock_controller.php",
];

function controll_routes($uri, $routes)
{
    include_once __DIR__ . "/views/shared/header.view.php";

    if(array_key_exists($uri, $routes)){
        require_once $routes[$uri];
    }else{
        http_response_code(404);
        echo "Page not Found!";
    }

    include_once __DIR__ . "/views/shared/footer.view.php";
}

controll_routes($uri, $routes);
