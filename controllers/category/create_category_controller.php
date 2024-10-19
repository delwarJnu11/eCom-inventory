<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/category.php";

if(isset($_POST['add_category'])){
    $category_name = htmlentities($_POST['category']);

    if($category_name){
        $category = new Category($category_name);
        $result = $category->create_category($db);
        if($result){
            $message = "Category created successfully done!";
        }else{
            $error = "There was an error occured!";
        }
    }
}

include_once __DIR__ . "/../../views/pages/category/create_category.view.php";