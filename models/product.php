<?php

class Product{
    public $product_name;
    public $category_id;
    public $unit_price;
    public $barcode;
    public $uom_id;

    function __construct($product_name, $category_id, $unit_price, $barcode, $uom_id)
    {
        $this->product_name = $product_name;
        $this->category_id = $category_id;
        $this->unit_price = $unit_price;
        $this->barcode = $barcode;
        $this->uom_id = $uom_id;
    }

    // Create Product
    public function create_product($db)
    {
        $statement = $db->prepare("insert into products(product_name, category_id, unit_price, barcode, uom_id) values(?, ?, ?, ?, ?)");

        $statement->bind_param("sidii", $this->product_name, $this->category_id, $this->unit_price, $this->barcode, $this->uom_id);

        return $statement->execute();
    }

    // Get All products
    public static function get_products($db)
    {
        $statement = $db->prepare("select products .*, categories.category_name as cname, uom.name as unit_name from products join categories on products.category_id = categories.id join uom on products.uom_id = uom.id");
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result) {
            $products =  $result->fetch_all(MYSQLI_ASSOC);
            return $products;
        } else {
            return [];
        }
    }

    // Get Products by category
    public static function get_products_by_category($category_id, $db)
    {
        $statement = $db->prepare("select * from products where category_id = :id");
        $statement->bind_param("i", $category_id);
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result) {
            $products = $result->fetch_all(MYSQLI_ASSOC);
            return $products;
        } else {
            return [];
        }
    }
    // Get Single Product
    public static function get_single_product($id, $db)
    {
        $statement = $db->prepare("select * from products where id = :id");
        $statement->bind_param("i", $id);
        $product = $statement->execute();
        return $product;
    }

    // Update product
    public function update_product($id, $db)
    {
        $statement = $db->prepare("update products set product_name = ?, category_id = ?, unit_price = ?, barcode = ?, uom_id = ?");
        $statement->bind_param("sidii", $this->product_name, $this->category_id, $this->unit_price, $this->barcode, $this->uom_id);
        return $statement->execute();
         
    }

    // Delete Product
    public static function delete_product($id, $db)
    {
        $statement = $db->prepare("delete from products where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }
};