<?php

Class GroupManager{
    
    private $conn;
    private $table_name = "group";
 
    public function __construct($db){
        $this->conn = $db;
    }
}


