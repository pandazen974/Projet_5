<?php

Class StudendtsStagesManager{
    
    private $conn;
    private $table_name = "classesResultsManager";
 
    public function __construct($db){
        $this->conn = $db;
    }
}
