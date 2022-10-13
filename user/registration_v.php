<?php
//This page is used by admin to view the login details of created agents.
include '../constant.php';

$url = $URL ."registration/read_profile_by_id.php";
$id=$_GET['id'];
$data=array("id"=>$id);
$postdata1 = json_encode($data);
$results=giplCurl($url,$postdata1);

print_r($results);

function giplCurl($api,$postdata){
    $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
     print_r($response);
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
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registration Detail- Please save it for future use</h3>
              </div>
              
      <form action="registration_edit.php" method="post">
      <div class="card-body">

      <?php 
								     
                     foreach($results as $key => $value){
                     foreach($value as $key1 => $value1)
                      {
                    ?>
          <div class="input-group mb-3">
          
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-boxes"></span>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Exam name- <?php echo  $value1->exam_name ?>" name="exam_name" readonly>
            
         
            &nbsp;&nbsp;
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Full name- <?php echo  $value1->full_name ?>" name="full_name" readonly readonly>
          </div>

          <div class="input-group mb-3">
         
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            <input type="date" class="form-control" placeholder="Date of Birth-<?php echo date("d/m/y",$value1->dob) ?>" name="dob" readonly  data-toggle="tooltip" title="Please Enter Date of Birth" readonly>         
            &nbsp;&nbsp;
                         <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                  <input type="date" class="form-control" placeholder="Gender-<?php echo  $value1->gender ?>" name="gender" readonly  data-toggle="tooltip" title="Please Enter Date of Birth" readonly>         

          </div>
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Father's name-<?php echo $value1->father_name ?>" name="father_name" readonly>

          &nbsp;&nbsp;        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Mother's name-<?php echo $value1->mother_name ?>" name="mother_name" readonly>

        </div>

        <div class="input-group mb-3" >
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
         <input type="text" class="form-control" placeholder="Mother's name-<?php echo $value1->marital_status ?>" name="marital_status" readonly>
         
                     &nbsp;&nbsp;        
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Spouse's name-<?php echo $value1->spouse_name ?>" name="spouse_name" autocomplete="off" >
        </div>
        
        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Spouse's name-<?php echo $value1->email ?>" name="spouse_name" autocomplete="off" >

          &nbsp;&nbsp;       
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
          <input type="number" class="form-control" placeholder="Mobile No.-<?php echo $value1->mobile ?>" name="mobile" readonly>

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
          <input type="text" class="form-control" placeholder="Address 1" name="address1" readonly>
          &nbsp;&nbsp; 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Address 2" name="address2" readonly>

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
          <input type="text" class="form-control" placeholder="District" name="district" readonly>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="State" name="state" readonly>
          &nbsp;&nbsp; 
      
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-pin"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="PinCode" name="pincode" readonly>
        </div> 

        <div class="input-group mb-3">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Religion" name="religion" readonly>

          &nbsp;&nbsp; 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-flag"></span>
            </div>
          </div>
        <input type="text" class="form-control" placeholder="Nationality" name="nationality" readonly>

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
  <input type="text" class="form-control" placeholder="Subject/Stream/Degree" name="subject" readonly>

</div>

        <div class="input-group mb-3">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
  <input type="date" class="form-control" placeholder="Passing Date" name="passing_date" readonly>

&nbsp;&nbsp;
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-percent"></span>
    </div>
  </div>
  <input type="text" class="form-control" placeholder="Marks Obtained(%)" name="h_percentage" readonly>

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
        <?php
                      }}
        ?>
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
