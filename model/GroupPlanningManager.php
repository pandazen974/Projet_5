<?php

Class GroupPlanningManager{
    
    private $conn;
    private $table_name = "groupPlanning";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

