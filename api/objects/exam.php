<?php 

 class exam{
    private $conn;
    private $table_name = "exam";
    public function __construct($db){
        $this->conn = $db;
    }

    public $id,$exam_name,$type,$total_mark,$amount, $status,$exam_date,$result_date,
    $admit_card_date,$created_by,$created_on;

    public function read_exam(){
        $query="Select  id,exam_name,type,total_mark, amount,status,exam_date,result_date,admit_card_date,created_by,created_on
        from " .$this->table_name .  " where status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    public function read_exam_details(){
        $query="Select  id,exam_name,type,total_mark, amount,status,exam_date,result_date,admit_card_date,created_by,created_on
        from " .$this->table_name .  " where exam_name=:exam_name";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":exam_name", $this->exam_name);
        $stmt->execute();
        return $stmt;
    }

    public function read_exam_list(){
        $query="Select  id,exam_name,type,total_mark,
         amount,status,exam_date,result_date,admit_card_date,created_by,created_on
        from " .$this->table_name;
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

    public function insert_exam(){
     echo   $query="INSERT INTO
        " . $this->table_name . "
    SET
             exam_name=:exam_name,
              type=:type,
               amount=:amount, 
               total_mark=:total_mark,
               exam_date=:exam_date,
               status=:status,
               result_date=:result_date,
               admit_card_date=:admit_card_date,
               created_on=:created_on,
               created_by=:created_by
               ";

               $stmt = $this->conn->prepare($query);
        $this->exam_name=htmlspecialchars(strip_tags($this->exam_name));
        $this->type=htmlspecialchars(strip_tags($this->type));
        $this->amount=htmlspecialchars(strip_tags($this->amount));
        $this->total_mark=htmlspecialchars(strip_tags($this->total_mark));
        $this->exam_date=htmlspecialchars(strip_tags($this->exam_date));
        $this->admit_card_date=htmlspecialchars(strip_tags($this->admit_card_date));
        $this->status=htmlspecialchars(strip_tags($this->status));
        $this->result_date=htmlspecialchars(strip_tags($this->result_date));
        $this->created_by=htmlspecialchars(strip_tags($this->created_by));
        $this->created_on=htmlspecialchars(strip_tags($this->created_on));


        $stmt->bindParam(":exam_name", $this->exam_name);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":total_mark", $this->total_mark);
        $stmt->bindParam(":exam_date", $this->exam_date);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":admit_card_date", $this->admit_card_date);
        $stmt->bindParam(":result_date", $this->result_date);
        $stmt->bindParam(":created_by", $this->created_by);
        $stmt->bindParam(":created_on", $this->created_on);
       
         // execute query
         if($stmt->execute()){
            return true;
        }
      
        return false;
    }

 }
?>