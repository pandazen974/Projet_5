<?php

Class ClassesPlanningManager extends Database{
    
    private $table_name = "classesPlanning";
    protected $conn;
    
 
    public function __construct(){
        $this->conn=parent::getConnection();
    }
}

