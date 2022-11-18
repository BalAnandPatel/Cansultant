<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../common/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../common/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

  <?php
  include "../constant.php";
  $exam_name = $_GET["examname"];
  $url = $URL."exam/read_exam_details.php";
  $data = array("exam_name"=>$exam_name);

  //print_r($data);
  $postdata = json_encode($data);
  $client = curl_init($url);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
  //curl_setopt($client, CURLOPT_POST, 5);
  curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
  $response = curl_exec($client);
  //print_r($response);
  $result = json_decode($response);
  //print_r($result);
  ?>

<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper m-auto">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        
          <div class="col-lg-10 m-auto">

            <div class="card card-success card-outline">
              <div class="card-header">
                <h5 class="m-0">Instructions and Procedure for online submission of Application Form</h5>
              </div>
              <div class="card-body">
                <h5 class="card-title mb-2"><b>Exam Details</b></h5>
               
                <table class="table table-bordered">
                  <thead>
                   <tr>
                     <th scope="col">POST NAME</th>
                     <th scope="col">TOTLE POST</th>
                     <th scope="col">POST ELIGIBILITY</th>
                     <th scope="col">APPLICATION FEE</th>
                     <th scope="col">AGE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     
                     foreach($result as $key => $value){
                     foreach($value as $key1 => $value1)
                     {
                     
                    ?>  
                    <tr>
                      <td><?php echo $value1->exam_name; ?></td>
                      <td><?php echo $value1->total_post; ?></td>
                      <td><?php echo $value1->eligibility; ?></td>
                      <td><?php echo $value1->amount; ?></td>
                      <td><?php echo $value1->age; ?></td>
                    </tr>
                  <?php } } ?>
                  </tbody>
                </table>
              </div>

                <div class="card-body">
                <h5 class="card-title mb-2"><b>Special title treatment</b></h5>
                <p class="card-text"><i class="fa fa-hand-point-right mr-2"></i>
                With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><i class="fa fa-hand-point-right mr-2"></i>
                With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><i class="fa fa-hand-point-right mr-2"></i>
                With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><i class="fa fa-hand-point-right mr-2"></i>
                With supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><i class="fa fa-hand-point-right mr-2"></i>
                With supporting text below as a natural lead-in to additional content.</p>
                <form action="registration.php">
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                    Check me out
                    </label>
                   </div>
                </div>
                <!-- <div class="btn btn-success">Click hear to Proceed</div> -->
                <a href="registration.php">
                <button type="submit" class="btn btn-success btn-sm btn-block">
                  Click hear to Proceed
                </button>
              </a>
               </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../common/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../common/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../common/dist/js/adminlte.min.js"></script>
</body>
</html>
