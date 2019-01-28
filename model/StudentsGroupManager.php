<?php

Class StudentsGroupManager{
    
    private $conn;
    private $table_name = "studentsGroup";
 
    public function __construct($db){
        $this->conn = $db;
    }
}
