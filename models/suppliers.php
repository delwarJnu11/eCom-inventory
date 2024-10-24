<?php

class Supplier{
    public $supplier_name;
    public $supplier_email;
    public $supplier_phone;
    public $supplier_dob;
    public $supplier_address;

    public function __construct($name, $email, $phone, $dob, $address)
    {
        $this->supplier_name = $name;
        $this->supplier_email = $email;
        $this->supplier_phone = $phone;
        $this->supplier_dob = $dob;
        $this->supplier_address = $address;
    }

    // create supplier 
    public function create_supplier($db)
    {
        $statement = $db->prepare("insert into suppliers(supplier_name, email, phone, dob, address) values (?, ?, ?, ?, ?)");
        $statement->bind_param("sssss", $this->supplier_name, $this->supplier_email, $this->supplier_phone, $this->supplier_dob, $this->supplier_address);
        return $statement->execute();
    }

    // Get suppliers
    public static function get_suppliers($db)
    {
        $statement = $db->prepare("select * from suppliers");
        $statement->execute();
        $result = $statement->get_result();
        if($result){
            $suppliers = $result->fetch_all(MYSQLI_ASSOC);
            return $suppliers;
        }else{
            return [];
        }
    }

    // Update supplier
    public function update_supplier($id, $db)
    {
        $statement = $db->prepare("update suppliers set supplier_name = :supplier_name, email = :email, phone = :phone, dob = :dob, address = :address where id = :id");
        $statement->bind_param("sssssi", $this->supplier_name, $this->supplier_email, $this->supplier_phone, $this->supplier_dob, $this->supplier_address, $id);
        return $statement->execute();
    }

    // Delete supplier
    public static function delete_supplier($id, $db)
    {
        $statement = $db->prepare("delete from suppliers where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }
}