<?php

Class UsersProfileManager{
    
    private $conn;
    private $table_name = "usersProfile";
 
    public function __construct($db){
        $this->conn = $db;
    }
}

