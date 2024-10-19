<?php

class Category{
    public $category_name;

    public function __construct($category)
    {
        $this->category_name = $category;
    }

    // Create Category
    public function create_category($db)
    {
        $statement = $db->prepare("insert into categories(category_name) values(?)");
        
        $statement->bind_param("s", $this->category_name);

        return $statement->execute();
    }

    // Get All Categories
    public static function get_categories($db)
    {
        $statement = $db->prepare("select * from categories");
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result) {
            $categories = $result->fetch_all(MYSQLI_ASSOC);
            return $categories;
        } else {
            return [];
        }
    }

    // Update Category
    public function update_category($id, $db)
    {
        $statement = $db->prepare("update categories set category_name = :category_name where id = :id");
        $statement->bind_param("si", $this->category_name, $id);
        return $statement->execute();
    }

    // Delete Category
    public static function delete_category($id,$db)
    {
        $statement = $db->prepare("delete from categories where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }

};