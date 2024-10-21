<?php

include_once __DIR__."/../../config/db_config.php";
include_once __DIR__. "/../../models/transaction_type.php";

if(isset($_POST['add_transaction'])){
    $transaction_type = $_POST['transaction'];
    $factor = $_POST['factor'];
    $comment = $_POST['comment'];

    if($transaction_type && $factor && $comment){
        $transaction = new TransactionType($transaction_type, $factor, $comment);
        $result = $transaction->create_transaction_type($db);
        if($result){
            $message = "Transaction Type created successfully done!";
        }else{
            $error = "There was an error occured!";
        }
    }
}

include_once __DIR__ . "/../../views/pages/transaction_type/create_transaction_type.view.php";