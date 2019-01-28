<?php

Class UserManager{
    
    private $conn;
    private $table_name = "user";
 
    public function __construct($db){
        $this->conn = $db;
    }
}
