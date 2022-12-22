<?php
session_start();
include '../../constant.php';

if(isset($_POST["transaction_id"])){
$id=$_POST["id"];
$registration_no =$_POST["registration_no"];
$exam_name=$_POST["exam_name"];
$transaction_id=$_POST["transaction_id"];
$amount=$_POST["amount"];

$url = $URL . "payment/confirm_payment.php";

$data = array( "user_id"=>$id,"amount"=>$amount,"transaction_id"=>$transaction_id);

    //  print_r($data);
     $postdata = json_encode($data);

$result_payment=url_encode_Decode($url,$postdata);
print_r($result_payment);


function url_encode_Decode($url,$postdata){
    $client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
// print_r($response);
return $result = json_decode($response);

}


?>