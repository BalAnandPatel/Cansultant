<?php 

 class payment{
    private $conn;
    private $table_name = "payment";
    public function __construct($db){
        $this->conn = $db;
    }

    public $pid,$user_id,$transaction_id,$amount,$status,$request_id ,$created_by,$created_on;


    public function read_payment_details(){
        $query="Select pid,user_id,transaction_id,amount,status,request_id ,created_by,created_on
        from " .$this->table_name .  " where user_id=:user_id and amount=:amount and status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->execute();
        return $stmt;
    }

    public function confirm_payment(){
        $query="Select pid,user_id,transaction_id,amount,status,request_id ,created_by,created_on
        from " .$this->table_name .  " where user_id=:user_id and transaction_id=:transaction_id and amount=:amount and status=1";
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":user_id", $this->user_id);
        $stmt->bindParam(":amount", $this->amount);
        $stmt->bindParam(":transaction_id", $this->transaction_id);
       

        $stmt->execute();
        return $stmt;
    }
}

?>