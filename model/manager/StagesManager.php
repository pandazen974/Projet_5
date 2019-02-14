<?php

Class StagesManager{
    
    private $conn;
    private $table_name = "stages";
 
    public function __construct($db){
        $this->conn = $db;
    }
}
