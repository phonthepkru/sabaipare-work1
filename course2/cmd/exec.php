<?php
class ExecSQL{
    private $conn;
    public function __construct($str_conn){
            $this->conn = $str_conn;

    }
    public function read($tablename){
        $stmt = $this->conn->prepare(" SELECT * FROM ".$tablename);
        $stmt->execute();
        return $stmt;
    }
    
}   
?>