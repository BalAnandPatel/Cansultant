<?php
include '../constant.php';

$url = $URL ."exam/read_exam.php";

$data=array();
$postdata1 = json_encode($data);
$results=giplCurl($url,$postdata1);

//print_r($results);

function giplCurl($api,$postdata){
    $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
     //print_r($response);
      return $result = json_decode($response);
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
  <link rel="stylesheet" href="../common/build/scss/pages/_login_and_register.scss"
</head>

<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>REGISTRATION</b></a>
  </div>
  <div class="card-body">
                <!-- <button type="button" class="btn btn-success toastrDefaultSuccess">
               
                </button> -->
</div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><a href="index.php"><b class="login-box-msg">Alreadr Register? Please Login.</b></a></p>
      
      <h2 class="login-box-msg"><b><u>Personal Details</u></b></h2>
      <hr>
      <form action="action/registration_post.php" method="post">
      
          <div class="input-group mb-3">
          
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
            </div>
            <select class="form-control" name="exam_name">
              <option value="select" selected>Please Select Exam</option>
              
                <?php

                foreach ($results as $key => $value) {
                  foreach ($value as $key1 => $value1) {

                ?>
                    <option value="<?php echo $value1->exam_name ?>">
                    <?php echo $value1->exam_name ?></option>
                <?php
                  }
                ?>
              <?php } ?>

            </select>
         
            &nbsp;&nbsp;
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Full name" name="full_name" autocomplete="off" required>
          </div>

          <div class="input-group mb-3">
         
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <input type="date" class="form-control" placeholder="Date of Birth" name="dob" autocomplete="off" required  data-toggle="tooltip" title="Please Enter Date of Birth">         
            &nbsp;&nbsp;
                         <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  <select class="form-control" name="gender" >
         <option class="form-control" value="0">Please Select Gender</option>
             <option class="form-control" value="Male">Male</option>
             <option class="form-control" value="Female">Female</option>
             <option class="form-control" value="Other">Other</option>
         </select>
          </div>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Father's name" name="father_name" autocomplete="off" required>

          &nbsp;&nbsp;        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Mother's name" name="mother_name" autocomplete="off" required>

        </div>

        <div class="input-group mb-3" >
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
         <select class="form-control" name="marital_status" >
         <option class="form-control" value="0">Please Select Marital Status</option>
         <option class="form-control" value="Married">Married</option>
             <option class="form-control" value="Unmarried">Unmarried</option>
                     </select>
                     &nbsp;&nbsp;        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Spouse's name" name="spouse_name" autocomplete="off" >
        </div>
        
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" required>

          &nbsp;&nbsp;       
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
          <input type="number" class="form-control" placeholder="Mobile No." name="mobile" autocomplete="off" required>

        </div>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
          <input type="number" class="form-control" placeholder="Alternate Mobile No." name="alternate_mobile" autocomplete="off" >
          &nbsp;&nbsp;   
        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Correspondance Address" name="cor_address" autocomplete="off" >
        </div>
        

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Address 1" name="address1" autocomplete="off" required>
          &nbsp;&nbsp; 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Address 2" name="address2" autocomplete="off" required>

        </div>


        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Address 3" name="address3" autocomplete="off" >
          &nbsp;&nbsp; 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="District" name="district" autocomplete="off" required>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="State" name="state" autocomplete="off" required>
          &nbsp;&nbsp; 
      
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-pin"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="PinCode" name="pincode" autocomplete="off" required>
        </div> 

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Religion" name="religion" autocomplete="off" required>

          &nbsp;&nbsp; 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-flag"></span>
            </div>
          </div>
        <input type="text" class="form-control" placeholder="Nationality" name="nationality" autocomplete="off" required>

        </div>  
        


<h2 class="login-box-msg"><b><u>Qualification & Other Details</u></b></h2>
      <hr>
      <div class="input-group mb-3" >
      <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-boxes"></span>
            </div>
          </div>
         <select class="form-control" name="h_qualification" >
         <option class="form-control" value="0">Please select highest qualification</option>
         <option class="form-control" value="Under Graduation">Post Graduation</option>
             <option class="form-control" value="Under Graduation">Under Graduation</option>
             <option class="form-control" value="Senior Secondar">Senior Secondary</option>
             <option class="form-control" value="Higher Secondary">Higher Secondary</option>
         </select>
         &nbsp;&nbsp; 
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-graduation-cap"></span>
    </div>
  </div>
  <input type="text" class="form-control" placeholder="Subject/Stream/Degree" name="subject" autocomplete="off" required>

</div>

        <div class="input-group mb-3">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
  <input type="date" class="form-control" placeholder="Passing Date" name="passing_date" autocomplete="off" required>

&nbsp;&nbsp;
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-percent"></span>
    </div>
  </div>
  <input type="text" class="form-control" placeholder="Marks Obtained(%)" name="h_percentage" autocomplete="off" required>

</div> 

<div class="input-group mb-3" >
<div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-graduation-cap"></span>
            </div>
          </div>
         <select class="form-control" name="grade" >
         <option class="form-control" value="0">Please Select Grade</option>
         <option class="form-control" value="First">First</option>
             <option class="form-control" value="Second">Second</option>
             <option class="form-control" value="Third">Third</option>
         </select>
        &nbsp;&nbsp;
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-language"></span>
            </div>
          </div>
         <select class="form-control" name="language">
         <option class="form-control" value="0">Please Select Language</option>
         <option class="form-control" value="Hindi">Hindi</option>
             <option class="form-control" value="English">English</option>
             <option class="form-control" value="Other">Other</option>
         </select>
        </div>
        <div class="input-group mb-3" >
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-book"></span>
            </div>
          </div>
        <select class="form-control" name="read" >
        <option class="form-control"  value="0">Are You Able To Read?</option>
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
         &nbsp;&nbsp;
         <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
         <select class="form-control" name="write">

         <option class="form-control"  value="0">Are You Able To Write?</option>
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
        </div>
      
        <div class="input-group mb-3" >
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-microphone"></span>
            </div>
          </div>
         <select class="form-control" name="speak">
         <option class="form-control"  value="0">Are You Able To Speak?</option>
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
        &nbsp;&nbsp;
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-wheelchair"></span>
    </div>
  </div>
  <input type="text" class="form-control" placeholder="Disability Category" name="disability_cat" autocomplete="off">

</div>

<div class="input-group mb-3">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-wheelchair"></span>
    </div></div>
  <input type="text" class="form-control" placeholder="Disability Type (If Any)" name="disability_type" autocomplete="off">
  
&nbsp;&nbsp;
<div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-spinner"></span>
    </div></div>
         <select class="form-control" name="ex_serviceman">
         <option class="form-control" value="0">Are you Ex-Serviceman</option>

         <option class="form-control" value="No">No</option>
         <option class="form-control" value="Yes">Yes</option>
             
         </select>
</div>
<div class="input-group mb-3">
<div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div></div>
         <select class="form-control" name="serving_defence_per">
         <option class="form-control" value="0">Are you Serving Defence Personnel?</option>

         <option class="form-control" value="No">No</option>
         <option class="form-control" value="Yes">Yes</option>  
         </select>
       &nbsp;&nbsp;
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-clock"></span>
    </div>
  </div>
  <input type="number" class="form-control" placeholder="Service Period of Serving Defence Personnel" name="service_period" autocomplete="off">

</div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

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
