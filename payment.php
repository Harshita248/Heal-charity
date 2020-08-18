<?php

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Amount=$_POST['Amount'];
$Phone=$_POST['phone'];
$purpose='Donation';


include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('test_53bc6d7170db23939cecc646a1c', 'test_dc3334672085dc9b9d454c6af0b', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $Amount,
        "send_email" => true,
        "email" => $Email,
        "buyer_name" =>$Name,
        "phone"=>$Phone,
        "send_sms" => true,
        "allow_repeated_payments" =>false,
        "redirect_url" => "http://heal-kids-charity.000webhostapp.com/redirect.php"
        ));
    //print_r($response);
    $pay_url=$response['longurl'];
    header("location: $pay_url");
	}
	catch (Exception $e) {
	    print('Error: ' . $e->getMessage());
	}



?>

