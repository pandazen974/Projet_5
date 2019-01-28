<?php

Class NewsPostManager{
    
    private $conn;
    private $table_name = "newsPost";
 
    public function __construct($db){
        $this->conn = $db;
    }
}