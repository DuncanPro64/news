<?php
require "mpesa/src/autoload.php";

use Kabangi\Mpesa\Init as Mpesa;
require('connection.php');

$mpesa = new Mpesa();

    if(isset($_POST['donate'])) {
        try {
            
            $phone = mysqli_real_escape_string($con, $_POST['phone']);   
            $amount = mysqli_real_escape_string($con, $_POST['amount']);
            $name = mysqli_real_escape_string($con, $_POST['name']);
            $university = mysqli_real_escape_string($con, $_POST['university']);

            $response = $mpesa->STKPush([
                "TransactionType"=> "CustomerPayBillOnline",
                "Amount"=> $amount,
                "PartyA"=> $phone, 
                // 0714757252
                "PartyB"=>174379,
                "PhoneNumber"=>$phone,
                "CallBackURL"=> "https://mydomain.com/path",
                "AccountReference"=>"CompanyXLTD",
                "TransactionDesc"=> "Payment of X" 

            ]);
            

        }catch(\Exception $e){
            $response = json_decode($e->getMessage());
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }
