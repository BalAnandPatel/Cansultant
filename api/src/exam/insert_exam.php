<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../../config/database.php';
  
// instantiate reg object
include_once '../../objects/exam.php';
  
$database = new Database();
$db = $database->getConnection();
  
$exam = new exam($db);
  
// get posted data
$data = json_decode(file_get_contents("php://input"));
// print_r($data);  
// make sure data is not empty
if(
    
    !empty($data->exam_name) &&
    !empty($data->amount)
)

{
    $exam->exam_name = $data->exam_name;
    $exam->amount = $data->amount;
    $exam->type = $data->type;
    $exam->exam_date = $data->exam_date;
    $exam->total_mark = $data->total_mark;
    $exam->status = $data->status;
    $exam->admit_card_date = $data->admit_card_date;
    $exam->result_date = $data->result_date;
    $exam->created_by = $data->created_by;
    $exam->created_on = $data->created_on;
       
    //var_dump($exam);
    // create the reg
    if($exam->insert_exam()){

        http_response_code(201);
        echo json_encode(array("message"=>"Successfull"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "Unable to insert exam"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to insert exam. Data is incomplete."));
}
?>