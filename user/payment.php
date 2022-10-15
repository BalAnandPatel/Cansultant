<?php 
include '../constant.php';

 $exam_name=$_POST["exam_name"];
$registration_no=$_POST["registration_no"];
$full_name=$_POST["full_name"];
$id=$_POST["id"];

$img="img/".$id."/profile"."/".$id.".png";
$img_thumb="img/".$id."/profile"."/".$id."_thumb"."png";

$url = $URL ."exam/read_exam_details.php";

$data=array("exam_name"=>$exam_name);
$postdata1 = json_encode($data);
$results=giplCurl($url,$postdata1);
print_r($results);


function giplCurl($api,$postdata){
    $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
    //  print_r($response);
      return  json_decode($response);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../common/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../common/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../common/build/scss/pages/_login_and_register.scss">
  <link rel="stylesheet" href="../common/build/scss/pages/_profile.scss">

</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  
  </div>
  <div class="card">
    <div class="card-body register-card-body">      
      <h2 class="login-box-msg"><b><u> <?php echo $exam_name ?></u></b></h2>
      <hr>
      <img class="profile-user-img"
                       src="<?php echo  $img ?>"
                       alt="User image">

                       <img class="profile-user-img"
                       src="<?php echo  $img_thumb ?>"
                       alt="User thumb image">
           
              <!-- form start -->
             
                <div class="card-body">

                

<p> Dear <b><?php echo $full_name  ?></b>, Thank you for the registration for examination : <b><?php echo $exam_name ?></b>. Your Registration Number is : <?php $registration_no?></p>
<p>Your Registration Amount for examination :<b> <?php echo $exam_name ?></b> is<b> &#8377;<?php echo $results->records[0]->amount ?></b> only.  </p>

                      


<h1>Instructions:</h1>
<ul>
    <li>
    Verify your name, examination details etc.for which examination fee is to be paid.
                    </li>
                    <li>
                    Select any one of the payment gateway and proceed for payment.
                    </li>
                    <li>
For any payment related query, insurance company/candidate needs to contact the respective bank.</li><li>
Please do not close the browser till you get an appropriate message (Payment Successful/Unsuccessful) and note down the Customer Reference number.</li><li>
In case the message shows as payment is "Unsuccessful" and amount is debited from bank account then kindly contact your respective bank.</li><li>
Exam fees once paid will not be refunded under any circumstances once scheduled, even if candidate chooses to remain absent for the examination.</li><li>
In case of payment confirmation not received, transaction amount will be refunded back within 3 - 4 working days.</li><li>
Our helpline number is 13454543543 ( timing 9:30 am to 5:30 pm ). You may also send an email to abc@gmail.com</li>
<li>
After successful payment, the student can download the registration receipt.
</li>
</ul>

                </div>
            </div>
            
            
            </div></div>
            
            
            
            </body></html>