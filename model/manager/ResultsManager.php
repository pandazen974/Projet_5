<?php

Class ResultsManager{
    
    private $conn;
    private $table_name = "results";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

