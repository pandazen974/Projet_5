<?php

Class JobsPostManager{
    
    private $conn;
    private $table_name = "jobsPost";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

