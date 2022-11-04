
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
	 
        <label for="exampleInput">Full Name*</label>
        <div class="input-group mb-3">
        
          <input type="text" class="form-control" placeholder="Full name" name="full_name" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        
        <label for="exampleInputEmail1">Date of Birth*</label>
          <input type="date" class="form-control" placeholder="Date of Birth" name="dob" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Gender*</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="gender" >
         <option class="form-control" value="0">Please Select Gender</option>
             <option class="form-control" value="Male">Male</option>
             <option class="form-control" value="Female">Female</option>
             <option class="form-control" value="Other">Other</option>
         </select>
        </div>
        <label for="exampleInputEmail1">Father's Name*</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Father's name" name="father_name" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Mother's Name*</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Mother's name" name="mother_name" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Marital Status</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="marital_status" >
         <option class="form-control" value="0">Please Select Marital Status</option>
         <option class="form-control" value="Married">Married</option>
             <option class="form-control" value="Unmarried">Unmarried</option>
                     </select>
        </div>
        <label for="exampleInputEmail1">Spouse Name</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Spouse's name" name="spouse_name" autocomplete="off" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Email*</label>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Mobile No*</label>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Mobile No." name="mobile" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Aletrnate Mobile No</label>
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Alternate Mobile No." name="alternate_mobile" autocomplete="off" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Correspondance Address</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Correspondance Address" name="cor_address" autocomplete="off" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Address 1*</label>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Address 1" name="address1" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Address 2*</label>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Address 2" name="address2" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Address 3</label>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Address 3" name="address3" autocomplete="off" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">District*</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="District" name="district" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">State*</label>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="State" name="state" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div> 
        <label for="exampleInputEmail1">Pincode*</label>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="PinCode" name="pincode" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div> 
        <label for="exampleInputEmail1">Religion*</label>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Religion" name="religion" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <label for="exampleInputEmail1">Nationality*</label>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nationality" name="nationality" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>  
        <label for="exampleInputEmail1">Category*</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Category" name="category" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>  


<h2 class="login-box-msg"><b><u>Qualification & Other Details</u></b></h2>
      <hr>
      <label for="exampleInputEmail1">Highest Qualification*</label>
      <div class="input-group mb-3" >
         <select class="form-control" name="h_qualification" >
         <option class="form-control" value="0">Please select highest qualification</option>
         <option class="form-control" value="Under Graduation">Post Graduation</option>
             <option class="form-control" value="Under Graduation">Under Graduation</option>
             <option class="form-control" value="Senior Secondar">Senior Secondary</option>
             <option class="form-control" value="Higher Secondary">Higher Secondary</option>
         </select>
        </div>
        <label for="exampleInputEmail1">Subject/Stream/Degree*</label>
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Subject/Stream/Degree" name="subject" autocomplete="off" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
</div>
<label for="exampleInputEmail1">Passing Date*</label>
        <div class="input-group mb-3">
  <input type="date" class="form-control" placeholder="Passing Date" name="passing_date" autocomplete="off" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
</div>
<label for="exampleInputEmail1">Marks Obtained(%)*</label>
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Marks Obtained(%)" name="h_percentage" autocomplete="off" required>
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-number"></span>
    </div>
  </div>
</div> 
<label for="exampleInputEmail1">Grade*</label>
<div class="input-group mb-3" >
         <select class="form-control" name="grade" >
         <option class="form-control" value="0">Please Select Grade</option>
         <option class="form-control" value="First">First</option>
             <option class="form-control" value="Second">Second</option>
             <option class="form-control" value="Third">Third</option>
         </select>
        </div>
        <label for="exampleInputEmail1">Language*</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="language">
         <option class="form-control" value="0">Please Select Language</option>
         <option class="form-control" value="Hindi">Hindi</option>
             <option class="form-control" value="English">English</option>
             <option class="form-control" value="Other">Other</option>
         </select>
        </div>

        <label for="exampleInputEmail1">Able to Read*</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="read">
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
        </div>

        <label for="exampleInputEmail1">Able to Write*</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="write">
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
        </div>
        <label for="exampleInputEmail1">Able to Speak*</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="speak">
         <option class="form-control" value="Yes">Yes</option>
             <option class="form-control" value="No">No</option>
         </select>
        </div>

        <!-- <label for="exampleInputEmail1">Zone</label>
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Zone" name="zone" autocomplete="off">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-envelope"></span>
    </div>
  </div>
</div>  -->

<!-- <label for="exampleInputEmail1">Post</label>
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Post" name="post" autocomplete="off">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-envelope"></span>
    </div>
  </div>
</div>

<label for="exampleInputEmail1">PostCode</label>
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="PostCode" name="postcode" autocomplete="off">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-envelope"></span>
    </div>
  </div>
</div> -->
<label for="exampleInputEmail1">Disability Category(If any)</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Disability Category" name="disability_cat" autocomplete="off">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
</div>
<label for="exampleInputEmail1">Disability Type(If Any)</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Disability Type" name="disability_type" autocomplete="off">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
</div>

<label for="exampleInputEmail1">Are you Ex-Serviceman</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="ex_serviceman">
         <option class="form-control" value="No">No</option>
         <option class="form-control" value="Yes">Yes</option>
             
         </select>
        </div>

        
<!-- <label for="exampleInputEmail1">Are you Disabled Ex-Serviceman</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="disabled_ex_serviceman">
         <option class="form-control" value="No">No</option>
         <option class="form-control" value="Yes">Yes</option>  
         </select>
        </div> -->


        <label for="exampleInputEmail1">Are you Serving Defence Personnel</label>
        <div class="input-group mb-3" >
         <select class="form-control" name="serving_defence_per">
         <option class="form-control" value="No">No</option>
         <option class="form-control" value="Yes">Yes</option>  
         </select>
        </div>

        <label for="exampleInputEmail1">Service Period (In Month)</label>
<div class="input-group mb-3">
  <input type="number" class="form-control" placeholder="Service Period of Serving Defence Personnel" name="service_period" autocomplete="off">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-user"></span>
    </div>
  </div>
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
