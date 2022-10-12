<?php 

 class exam{
    private $conn;
    private $table_name = "exam";
    public function __construct($db){
        $this->conn = $db;
    }

    public $id,$exam_name,$type,$total_mark,$status,$exam_date,$result_date,$admit_card_date,$created_by,$created_on;

    public function read_exam(){
        $query="Select  id,exam_name,type,total_mark,status,exam_date,result_date,admit_card_date,created_by,created_on
        from " .$this->table_name .  " where status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->execute();
        return $stmt;
    }

}

?>