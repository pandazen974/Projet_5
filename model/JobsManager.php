<?php

Class JobsManager{
    
    private $conn;
    private $table_name = "jobs";
 
    public function __construct($db){
        $this->conn = $db;
    }
}