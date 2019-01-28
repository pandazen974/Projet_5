<?php

Class PostsManager{
    
    private $conn;
    private $table_name = "posts";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

