<?php

Class RightsManager{
    
    private $conn;
    private $table_name = "rights";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

