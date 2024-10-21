<?php

class Status{
    public $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    // Create Status
    public function create_status($db)
    {
        $statement = $db->prepare("insert into status(status) values(?)");
        
        $statement->bind_param("s", $this->status);

        return $statement->execute();
    }

    // Get All Status
    public static function get_all_status($db)
    {
        $statement = $db->prepare("select * from status");
        $statement->execute();
        $result = $statement->get_result();
        if($result){
            $status = $result->fetch_all(MYSQLI_ASSOC);
            return $status;
        }else{
            return [];
        }
    }

    // Update Category
    public function update_status($id, $db)
    {
        $statement = $db->prepare("update status set status = :status where id = :id");
        $statement->bind_param("si", $this->status, $id);
        return $statement->execute();
    }

    // Delete Category
    public static function delete_status($id,$db)
    {
        $statement = $db->prepare("delete from status where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }
};