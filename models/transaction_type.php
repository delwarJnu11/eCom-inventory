<?php

class TransactionType{
    public $name;
    public $factor;
    public $comment;

    public function __construct($tranaction_type, $factor, $comment)
    {
        $this->name = $tranaction_type;
        $this->factor = $factor;
        $this->comment = $comment;
    }

    // Create Transaction type
    public function create_transaction_type($db)
    {
        $statement = $db->prepare("insert into transaction_type(name, factor, comment) values(?, ?, ?)");
        $statement->bind_param("sis", $this->name, $this->factor, $this->comment);
        return $statement->execute();
    }

    // Get all transaction type
    public static function get_all_transaction_type($db)
    {
        $statement = $db->prepare("select * from transaction_type");
        $statement->execute();
        $result = $statement->get_result();
        if($result){
            $transaction_types = $result->fetch_all(MYSQLI_ASSOC);
            return $transaction_types;
        }else{
            return [];
        }
    }

    // Update Transaction Types
    public function update_transaction_types($id, $db)
    {
        $statement = $db->prepare("update transaction_type set name = :name, factor = :factor, comment = :comment where id = :id");
        $statement->bind_param("sisi", $this->name, $this->factor, $this->comment, $id);
        return $statement->execute();
    }

    // Delete Transaction type
    public static function delete_transaction_type($id, $db)
    {
        $statement = $db->prepare("delete from transaction_type where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    } 
};