<?php

class UnitMeasurement{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Create Unit Measurement Name
    public function create_unit_measurement($db)
    {
        $statement = $db->prepare("insert into uom(name) values(:name)");
        $statement->bind_param("s", $this->name);
        return $statement->execute();
    }

    // Get all Unit Measurements
    public static function get_all_unit_measurement($db)
    {
        $statement = $db->prepare("select * from uom");
        $statement->execute();
        $result = $statement->get_result();
    
        if ($result) {
            $measurements = $result->fetch_all(MYSQLI_ASSOC);
            return $measurements;
        } else {
            return [];
        }
    }

    // Update unit measurement
    public function update_measurement($id, $db)
    {
        $statement = $db-> prepare("update uom set name = :name where id = :id");
        $statement->bind_param('si', $this->name, $id);
        return $statement->execute();
    }

    // Delete measurement
    public static function delete_measurement($id, $db)
    {
        $statement = $db->prepare("delete from uom where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }
};