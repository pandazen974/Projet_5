<?php

Class ClassesPlanningManager{
    
    private $conn;
    private $table_name = "classesPlanning";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

