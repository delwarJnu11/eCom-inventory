<?php

class Client{
    public $client_name;
    public $client_email;
    public $client_phone;
    public $client_dob;
    public $client_address;

    public function __construct($name, $email, $phone, $dob, $address)
    {
        $this->client_name = $name;
        $this->client_email = $email;
        $this->client_phone = $phone;
        $this->client_dob = $dob;
        $this->client_address = $address;
    }

    // create client 
    public function create_client($db)
    {
        $statement = $db->prepare("insert into clients(client_name, email, phone, dob, address) values (?, ?, ?, ?, ?)");
        $statement->bind_param("sssss", $this->client_name, $this->client_email, $this->client_phone, $this->client_dob, $this->client_address);
        return $statement->execute();
    }

    // Get clients
    public static function get_clients($db)
    {
        $statement = $db->prepare("select * from clients");
        $statement->execute();
        $result = $statement->get_result();
        if($result){
            $clients = $result->fetch_all(MYSQLI_ASSOC);
            return $clients;
        }else{
            return [];
        }
    }

    // Update client
    public function update_client($id, $db)
    {
        $statement = $db->prepare("update clients set client_name = :client_name, email = :email, phone = :phone, dob = :dob, address = :address where id = :id");
        $statement->bind_param("sssssi", $this->client_name, $this->client_email, $this->client_phone, $this->client_dob, $this->client_address, $id);
        return $statement->execute();
    }

    // Delete client
    public static function delete_client($id, $db)
    {
        $statement = $db->prepare("delete from clients where id = :id");
        $statement->bind_param("i", $id);
        return $statement->execute();
    }
}