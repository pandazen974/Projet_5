<?php

Class StudentsStagesManager{
    
    private $conn;
    private $table_name = "studentsStagesManager";
 
    public function __construct($db){
        $this->conn = $db;
    }
}
