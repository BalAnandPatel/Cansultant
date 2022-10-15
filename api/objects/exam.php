<?php 

 class exam{
    private $conn;
    private $table_name = "exam";
    public function __construct($db){
        $this->conn = $db;
    }

    public $id,$exam_name,$type,$total_mark,$amount, $status,$exam_date,$result_date,$admit_card_date,$created_by,$created_on;

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
        $query="Select  id,exam_name,type,total_mark, amount,status,exam_date,result_date,admit_card_date,created_by,created_on
        from " .$this->table_name .  "";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }
}

?>