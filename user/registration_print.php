<?php
//session_start();
include "include/header.php";
$id=$_GET["id"];
$url = $URL ."registration/read_profile_by_id.php";
$id=$_GET['id'];
$data=array("id"=>$id);
$postdata1 = json_encode($data);
$result=giplCurl($url,$postdata1);
//print_r($result);

$img="img/".$id."/profile"."/".$id.".png";
$img_thumb="img/".$id."/profile"."/".$id."_thumb"."png";

function giplCurl($api,$postdata){
    $url = $api; 
      $client = curl_init($url);
      curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
      $response = curl_exec($client);
  //   print_r($response);
      return $result = json_decode($response);
  }
?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5">
            <i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
          <img src="image/logo.png" width="120" height="60"> <?php echo $EXAM_NAME ?>  <div class="invoice-date">
               
             </div> 
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               <strong class="text-inverse">Registration Detail</strong>
               <address class="m-t-5 m-b-5">
                  <small> <?php echo $EXAM_NAME ?><br>
                 
               </address>
            </div>
            <?php 
								     
                              foreach($result as $key => $value){
                              foreach($value as $key1 => $value1)
                               {
                            ?>
        
            <div class="invoice-to">
               <strong class="text-inverse">Registration Detail</strong>
               <address class="m-t-5 m-b-5">
                  <table>
                     <tr><td><small>Registration No: </small></td><td><small><?php echo $value1->registration_no;?></small></td></tr>
                     <tr><td><small>Full Name: </td><td><small> <?php echo ucfirst($value1->full_name);?></small></td></tr>
                     <tr> <td><small>Date Of Birth: <small></td> <td> <small> <?php echo $value1->dob;?></small> <br></td></tr>
                     <tr> <td><small>Gender: <small></td> <td> <small> <?php echo $value1->gender;?></small> <br></td></tr>
                     <tr> <td><small>Marital Status: <small></td> <td> <small> <?php echo $value1->marital_status;?></small> <br></td></tr>
                     <tr> <td><small>Spouse Name: <small></td> <td> <small> <?php echo $value1->spouse_name;?></small> <br></td></tr>
                    
                     <tr> <td><small>Father's Name: <small></td><td> <small><?php echo ucfirst($value1->father_name);?><br></small></td></tr>
                     <tr> <td><small>Mother's Name: <small></td><td> <small><?php echo ucfirst($value1->mother_name);?><br></small></td></tr>
                     <tr> <td><small>Phone No: <small></td> <td> <small> <?php echo $value1->mobile;?></small> <br></td></tr>
                     <tr> <td><small>Aletrnate Contact No: <small></td> <td> <small> <?php echo $value1->alternate_mobile;?></small> <br></td></tr>
                     <tr> <td><small>Address1: <small></td><td> <small><?php echo ucfirst($value1->address1);?><br></small></td></tr>
                     <tr> <td><small>Address2: <small></td><td> <small><?php echo ucfirst($value1->address2);?><br></small></td></tr>
                     <tr> <td><small>Address3: <small></td><td> <small><?php echo ucfirst($value1->address3);?><br></small></td></tr>
                     <tr> <td><small>Corresponding Address: <small></td><td> <small><?php echo ucfirst($value1->cor_address);?><br></small></td></tr>
                     <tr> <td><small>District: <small></td> <td> <small> <?php echo $value1->district;?></small> <br></td></tr>
                     <tr> <td><small>State: <small></td> <td> <small> <?php echo $value1->state;?></small> <br></td></tr>
                     <tr> <td><small>Religion: <small></td> <td> <small> <?php echo $value1->religion;?></small> <br></td></tr>
                     <tr> <td><small>Nationality: <small></td> <td> <small> <?php echo $value1->nationality;?></small> <br></td></tr>
                    
                     <tr> <td><small>Higher Qualification: <small></td><td> <small> <?php echo $value1->h_qualification;?><br></small></td></tr>
                     <tr> <td><small>Subject/Degree: <small></td><td> <small> <?php echo ucfirst($value1->subject);?><br></small></td></tr>
                     <tr> <td><small>Marks Obtaioned (%): <small></td><td> <small> <?php echo ucfirst($value1->h_percentage);?><br></small></td></tr>
                     <tr> <td><small>Grade: <small></td><td> <small> <?php echo ucfirst($value1->grade);?><br></small></td></tr>
                     <tr> <td><small>Passing Date: <small></td><td> <small> <?php echo ucfirst($value1->passing_date);?><br></small></td></tr>
                     <tr> <td><small>Language: <small></td><td> <small> <?php echo ucfirst($value1->language);?><br></small></td></tr>
                     <tr> <td><small>Are you able to read?: <small></td><td> <small> <?php echo ucfirst($value1->read);?><br></small></td></tr>
                     <tr> <td><small>Are you able to write?: <small></td><td> <small> <?php echo ucfirst($value1->write);?><br></small></td></tr>
                     <tr> <td><small>Are you able to speak?: <small></td><td> <small> <?php echo ucfirst($value1->speak);?><br></small></td></tr>
                     <tr> <td><small>Disability Category: <small></td><td> <small> <?php echo ucfirst($value1->disability_cat);?><br></small></td></tr>
                     <tr> <td><small>Type of Disability: <small></td><td> <small> <?php echo ucfirst($value1->disability_type);?><br></small></td></tr>
                     <tr> <td><small>Are you Ex-Serviceman?: <small></td><td> <small> <?php echo ucfirst($value1->ex_serviceman);?><br></small></td></tr>
                     <tr> <td><small>Are you serving Defence Personnel?: <small></td><td> <small> <?php echo ucfirst($value1->serving_defence_per);?><br></small></td></tr>
                     <tr> <td><small>Period of Service (in month): <small></td><td> <small> <?php echo ucfirst($value1->service_period);?><br></small></td></tr>
                     <tr> <td><small>Registration Date: <small></td><td> <small> <?php echo ucfirst($value1->created_on);?><br></small></td></tr>
                  
                    </table>
               </address>
            </div>
            <div class="invoice-date">
            <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo  $img ?>"
                       alt="User thumb image">
             </div>
           
             <?php
                               }
                            } 
            
            ?>
         </div>
         <!-- end invoice-header -->
        
         <div class="invoice-note">
            * The applicant shall be liable/responsible for any payment made by him any third account and right created from there and 
            company shal have no liability in this regards<br>
            * This recipt is not transferable unles consented by the company<br>
            * Pleas keep this document in safe custody and in case same is 
            lost/misplaced please inform to company immediately with request letter copy of FIR news cutting and affidavit<br>
            * This money receipt is subject to realiation of payment mode<br>
         </div>
         <br>
         <p class="text-center m-b-5 f-w-600">
         <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo  $img_thumb ?>"
                       alt="User thumb image">
                </div>
               Stamp & Signture
            </p>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->

         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               Contact Us
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> abcd.com</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> +918840019424</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> abcd@gmail.com</span>
            </p>
         </div>
         <!-- end invoice-footer -->
      </div>
   </div>
</div>
<div id="non-printable">
<?php
include "include/footer.php";
?>
</div>