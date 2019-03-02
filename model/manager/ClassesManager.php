<?php

Class ClassesManager extends Database{
    
    private $table_name = "classes";
    protected $conn;
 
    public function __construct(){
        $this->conn=parent::getConnection();
    }
    
    public function createOneClass(Classes $classes){
         try{
            $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    className=:className ";
 
            $stmt = $this->conn->prepare($query);
            $className= htmlspecialchars($classes->className());
            $stmt->bindParam(':className',$className,PDO::PARAM_STR);
            $stmt->execute();    
            $classes->setClassName($this->conn->lastInsertId(),PDO::PARAM_STR);
            return $classes;
         }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function readAllClasses(){
        try{
            $query = "SELECT *

            FROM
                " . $this->table_name . "
            ORDER BY
                id
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();

            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $classes[]=new Classes($donnees);
                }
            return $classes;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
    public function deleteOneClass(Classes $classes){
        $query = "DELETE FROM classes WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $id=$classes->id();
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}