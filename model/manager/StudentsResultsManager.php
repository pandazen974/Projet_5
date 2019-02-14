<?php

Class StudentsResultsManager{
    
    private $conn;
    private $table_name = "studentsResults";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

