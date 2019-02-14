<?php

Class ProfileManager{
    
    private $conn;
    private $table_name = "profile";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

