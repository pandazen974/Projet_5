<?php

Class ClassesManager{
    
    private $conn;
    private $table_name = "classes";
 
    public function __construct($db){
        $this->conn = $db;
    }
    
        public function createOneClass(Classes $classes){
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    className=:className, ";
 
        $stmt = $this->conn->prepare($query);
        $className= htmlspecialchars($classes->className());
        $stmt->bindParam(':className',$className);
        $stmt->execute();    
    }
    
    public function deleteOneClass(Classes $classes){
    $query = "DELETE FROM classes WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $id=$classes->id();
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    }
}