<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    "/" => "controllers/home_controller.php",
    "/add_product" => "controllers/products/create_product_controller.php",
    "/products" => "controllers/products/display_products_controller.php",
    "/add_category" => "controllers/category/create_category_controller.php",
    "/categories" => "controllers/category/display_category_controller.php",
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
