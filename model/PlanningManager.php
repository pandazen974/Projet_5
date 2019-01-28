<?php

Class PlanningManager{
    
    private $conn;
    private $table_name = "planning";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

