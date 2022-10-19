<?php
include '../../constant.php';

if(isset($_POST["exam_name"])){
$exam_name=strtoupper($_POST["exam_name"]);
$type=$_POST["type"];
$amount=$_POST["amount"];
$total_mark=$_POST["total_mark"];
$exam_date=date("Y-m-d", strtotime($_POST["exam_date"]));
$admit_card_date=date("Y-m-d", strtotime($_POST["admit_card_date"]));
$result_date=date("Y-m-d", strtotime($_POST["result_date"]));

$url=$URL. "exam/insert_exam.php";
$data = array("exam_name"=>$exam_name,"amount"=>$amount,"type"=>$type,
"total_mark"=>$total_mark,"exam_date"=>$exam_date,"admit_card_date"=>$admit_card_date,
"result_date"=>$result_date,"status"=>"1","created_by"=>"Admin","created_on"=>date("Y-m-d"));
    //  print_r($data);
 $postdata = json_encode($data);
$result=url_encode_Decode($url,$postdata);
//print_r($result);
if($result->message=="Successfull"){
 header('Location:../exam_list.php');
}
 header('Location:../exam_list.php');
}

function url_encode_Decode($url,$postdata){
    $client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
 //print_r($response);
 $result = json_decode($response);
return $result;
}
?>