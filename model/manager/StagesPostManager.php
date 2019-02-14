<?php

Class StagesPostManager{
    
    private $conn;
    private $table_name = "stagesPost";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

