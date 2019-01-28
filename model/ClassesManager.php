<?php

Class ClassesManager{
    
    private $conn;
    private $table_name = "classes";
 
    public function __construct($db){
        $this->conn = $db;
    }
}