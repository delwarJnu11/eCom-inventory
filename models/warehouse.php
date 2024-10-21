<?php

class WareHouse{
    public $warehouse_name;
    public $location;
    public $capacity;

    public function __construct($name, $location, $capacity)
    {
        $this->warehouse_name = $name;
        $this->location = $location;
        $this->capacity = $capacity;
    }

    // Create WareHouse
    public function create_warehouse($db)
    {
        $statement = $db->prepare("insert into warehouse(warehouse_name, location, capacity) values(?, ?, ?)");
        $statement->bind_param("ssi", $this->warehouse_name, $this->location, $this->capacity);
        return $statement->execute();
    }

    // Get All Warehouse
    public static function get_all_warehouse($db)
    {
        $statement = $db->prepare("select * from warehouse");
        $statement->execute();
        $result = $statement->get_result();
        if($result)
        {
            $warehouses = $result->fetch_all(MYSQLI_ASSOC);
            return $warehouses;
        }else{
            return [];
        }
    }

    // Update WareHouse
    public function update_warehouse($id, $db)
    {
        $statement = $db->prepare("update warehouse set warehouse_name = :warehouse_name, location = :location, capacity = :capacity where id = :id");
        $statement->bind_param("ssi", $this->warehouse_name, $this->location, $this->capacity);
        return $statement->execute();
    }

    // Delete measurement
    public static function delete_warehouse($id, $db)
    {
        $statement = $db->prepare("delete from warehouse where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }
}