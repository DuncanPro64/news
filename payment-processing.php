<?php
require "mpesa/src/autoload.php";
require('config.php');

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
                "CallBackURL"=> "http://0004-41-89-22-3.ngrok.io/news/",
                "AccountReference"=>"CompanyXLTD",
                "TransactionDesc"=> "Payment of X" 

            ]);


            

        }catch(\Exception $e){
            $response = json_decode($e->getMessage());
        }

        
        echo json_encode($response);
        // header('Content-Type: application/json');
        // header('Location :index.php');

    $response = '{
        "ResultCode": 0, 
        "ResultDesc": "Confirmation Received Successfully"
    }';

    // Response from M-PESA Stream
    $mpesaResponse = file_get_contents('php://input');

    // log the response
    $logFile = "M_PESAConfirmationResponse.txt";

    $jsonMpesaResponse = json_decode($mpesaResponse, true); // We will then use this to save to database

    $transaction = array(
            ':TransactionType'      => $jsonMpesaResponse['TransactionType'],
            ':TransID'              => $jsonMpesaResponse['TransID'],
            ':TransTime'            => $jsonMpesaResponse['TransTime'],
            ':TransAmount'          => $jsonMpesaResponse['TransAmount'],
            ':BusinessShortCode'    => $jsonMpesaResponse['BusinessShortCode'],
            ':BillRefNumber'        => $jsonMpesaResponse['BillRefNumber'],
            ':InvoiceNumber'        => $jsonMpesaResponse['InvoiceNumber'],
            ':OrgAccountBalance'    => $jsonMpesaResponse['OrgAccountBalance'],
            ':ThirdPartyTransID'    => $jsonMpesaResponse['ThirdPartyTransID'],
            ':MSISDN'               => $jsonMpesaResponse['MSISDN'],
            ':FirstName'            => $jsonMpesaResponse['FirstName'],
            ':MiddleName'           => $jsonMpesaResponse['MiddleName'],
            ':LastName'             => $jsonMpesaResponse['LastName']
    );

    // write to file
    $log = fopen($logFile, "a");
    fwrite($log, $mpesaResponse);
    fclose($log);

    echo $response;
    echo $transaction[':TransactionType'];
    // this will insert to database.
    insert_response($transaction);
    }