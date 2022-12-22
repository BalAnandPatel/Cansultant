<?php
session_start();
//This page is used by admin to view the login details of created agents.
include '../constant.php';

$exam_name=$_POST["exam_name"];
$registration_no=$_POST["registration_no"];
$full_name=$_POST["full_name"];
$id=$_POST["id"];

$img="img/".$id."/profile"."/".$id.".png";
$img_thumb="img/".$id."/profile"."/".$id."_thumb".".png";

 $url = $URL ."exam/read_exam_details.php";

$data=array("exam_name"=>$exam_name);
$postdata1 = json_encode($data);
$results=giplCurl($url,$postdata1);
//print_r($results);

$_SESSION['$exam_name'] = $_POST["exam_name"];
$_SESSION['$registration_no'] = $_POST["registration_no"];
$_SESSION['user_id'] = $_POST["id"];
$_SESSION['full_name'] = $_POST["full_name"]; 
$_SESSION['amount'] = $results->records[0]->amount;



function giplCurl($api,$postdata){
    $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
      //print_r($response);
      return  json_decode($response);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SHAILJA SAMEER EDUCATION AND GREEN REVOLUTION PRIVATE LIMITED</title>

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
    <a href="#"><b>PAYMENT</b></a>
  </div>
  <div class="card card-success card-outline">
    <div class="card-body register-card-body">
      <!-- <p class="login-box-msg"><a href="index.php"><b class="login-box-msg">Alreadr Register? Please Login.</b></a></p> -->
      
      <h2 class="login-box-msg"><b><u>Payment Details</u></b></h2>
      <hr>
      <div class="container-fluid">

<div class="row">
  
        <div class="col-sm-6">
  

      <img class="profile-user-img"
                       src="<?php echo  $img ?>"
                       alt="User image">
        </div> <div class="col-sm-6">
                       <img class="profile-user-img"
                       src="<?php echo  $img_thumb ?>"
                       alt="User thumb image">
           </div></div></div>
              <!-- form start -->
             <hr>
                <div class="card-body">

            
      <div class="container-fluid">
   
      <p> Dear <b><?php echo $full_name  ?></b>, Thank you for the registration for examination : <b><?php echo $exam_name ?></b>. Your Registration Number is :<b> <?php echo $registration_no; ?></b></p>
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

<div class="row">    
          <div class="col-sm-4">

          
          </div>
          <div class="col-sm-4">

          <form action="action/pay.php" method="post" enctype="">
   
              
          <input type="hidden" name="id" value="<?php echo $id ?>" >
           <!--<input type="text" class="form-control" name="transaction_id"  placeholder="Transaction Id" autocomplete="off"  required>-->
           <input type="hidden"  name="amount" value="<?php echo $results->records[0]->amount ?>" autocomplete="off"  required>

  <input type="hidden" name="name" value="<?php echo $full_name ?>" readonly>
    <input type="hidden" name="email" value="giplanand@gmail.com" readonly>
                <input type="hidden" name="exam_name" value="<?php echo $exam_name ?>" readonly>
            
          </div>
          <div class="col-sm-4">
          
          <!-- <div class="col-4"  style="margin: 0px 281px 0px;"> -->
            <input type="hidden" name="id" value="<?php echo $id ?>" >

            <input type="hidden" name="registration_no" value="<?php echo $registration_no ?>" readonly>

                <input type="hidden" name="exam_name" value="<?php echo $exam_name ?>" readonly>
            <button type="submit"  class="btn btn-success btn-block">Confirm & Pay</button>
            
          
          </div>
          <!-- /.col -->
        </div>
                </div>
               
      </div>
     

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../common/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../common/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../common/dist/js/adminlte.min.js"></script>
</body>
</html>