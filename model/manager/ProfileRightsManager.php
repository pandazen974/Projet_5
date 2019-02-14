<?php

Class ProfileRightsManager{
    
    private $conn;
    private $table_name = "profileRights";
 
    public function __construct($db){
        $this->conn = $db;
    }
}