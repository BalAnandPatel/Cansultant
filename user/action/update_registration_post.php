<?php
include '../../constant.php';

if(isset($_POST["full_name"])){
 $id=$_POST["id"];
$full_name=strtoupper($_POST["full_name"]);
$father_name=$_POST["father_name"];
$mother_name=$_POST["mother_name"];
$marital_status=$_POST["marital_status"];
$spouse_name=$_POST["spouse_name"];
$dob=$_POST["dob"];
$gender=strtoupper($_POST["gender"]);
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$alternate_mobile=$_POST["alternate_mobile"];
$address1=strtoupper($_POST["address1"]);
$address2=strtoupper($_POST["address2"]);
$address3=strtoupper($_POST["address3"]);
$cor_address=strtoupper($_POST["cor_address"]);
$district=strtoupper($_POST["district"]);
$state=strtoupper($_POST["state"]);
$pincode=$_POST["pincode"];
$religion=strtoupper($_POST["religion"]);
$category=strtoupper($_POST["category"]);
$nationality=strtoupper($_POST["nationality"]);
$h_qualification=strtoupper($_POST["h_qualification"]);
$subject=strtoupper($_POST["subject"]);
$passing_date=$_POST["passing_date"];
$h_percentage=$_POST["h_percentage"];
$grade=$_POST["grade"];
$languages=strtoupper($_POST["language"]);
$read=$_POST["read"];
$write=$_POST["write"];
$speak=$_POST["speak"];
$disability_cat=$_POST["disability_cat"]? $disability_cat : "NO";
$disability_type=$_POST["disability_type"]? $disability_type : "NO";
$ex_serviceman=$_POST["ex_serviceman"]? $ex_serviceman : "NO";
$serving_defence_per=$_POST["serving_defence_per"]? $serving_defence_per : "NO";
$service_period=$_POST["service_period"]? $service_period : "0";
$created_on=date("Y-m-d H:i:s");
$created_by="USER";
$registration_no =$_POST["registration"];
$password= date("dmY", strtotime($dob));

$url = $URL . "registration/update_registration.php";

$data = array( "id"=>$id,
  "full_name" => $full_name,  "father_name" => $father_name,  "mother_name" => $mother_name, 
  "status"=>"0","admit_card"=>"0","result"=>"0","password"=>$password, "spouse_name" => $spouse_name, 
  "marital_status"=>$marital_status, "dob" => $dob,  "gender" => $gender, "email" => $email, "mobile" => $mobile, 
  "alternate_mobile" => $alternate_mobile,   "address1" => $address1,  "address2" => $address2, 
   "address3" => $address3,
   "cor_address"=>$cor_address, "district" => $district,  "state" => $state,  
     "pincode" => $pincode,
    "religion" => $religion,  "category" => $category,"nationality"=>$nationality, 
      "h_qualification" => $h_qualification, "subject" => $subject, 
      "passing_date" => $passing_date, 
      "h_percentage" => $h_percentage, "grade" => $grade, "languages" => $languages, 
      "read" => $read, "write" => $write,
      "speak"=>$speak,
      //  "zone" => $zone, "post" => $post, "postcode" => $postcode,  
       "disability_cat" => $disability_cat, 
        "disability_type" => $disability_type,
         "ex_serviceman" => $ex_serviceman,  
        //  "disabled_ex_serviceman" => $disabled_ex_serviceman,
         "serving_defence_per" => $serving_defence_per,
            "service_period" => $service_period, 
            "created_on" => $created_on, 
            "registration_no"=>$registration_no, 
             "created_by" => $created_by);

     print_r($data);
     $postdata = json_encode($data);

$result_registration=url_encode_Decode($url,$postdata);
print_r($result_registration);
if($result_registration->message=="Successfull"){
    $uid=$_POST["id"];
    $target_dir = "../img/";
    $path="../img/".$uid."/profile/";
    if (!is_dir($path)){
    mkdir($path, 0777, true);
    }
    else{ }
    $target_file = $target_dir .$uid."/profile/". $uid.".png";
    $target_file_thumb = $target_dir .$uid."/profile/". $uid."_thumb".".png";
    if ((file_exists($target_file)) && (file_exists($target_file_thumb))) {
      unlink($target_file);
      unlink($target_file_thumb);
    }
    if (($_FILES["fileUpload"]["size"] > 900000) && ($_FILES["fileUploadThumb"]["size"] > 900000)) {
       $uploadOk = 0;
     }
    if(isset($_POST["submit"])) {
      $check = $_FILES["fileUpload"]["type"];
      $check_thumb=$_FILES["fileUploadThumb"]["type"];
      $allowed = array("image/jpeg", "image/JPEG","image/gif","image/GIF","image/png","image/PNG","image/JPG","image/jpg");
      if((in_array($check, $allowed)) && (in_array($check_thumb, $allowed))) {
       
      if ((move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) && (move_uploaded_file($_FILES["fileUploadThumb"]["tmp_name"], $target_file_thumb))) {        
        $_SESSION["registration"] = "File uploaded succesfully.";
        header('Location:../registration_print.php?id='.$uid);
      }
     } else {
       $_SESSION["registration"] = "Sorry, there was an error uploading your file.";
       header('Location:../update_registration.php?id='.$uid);
      }
    }
    
    
}

}

function url_encode_Decode($url,$postdata){
    $client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
print_r($response);
return $result = json_decode($response);

}


?>