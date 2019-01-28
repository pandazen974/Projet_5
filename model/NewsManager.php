<?php

Class NewsManager{
    
    private $conn;
    private $table_name = "news";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

