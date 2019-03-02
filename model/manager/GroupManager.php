<?php

Class GroupManager extends Database{
    
    private $table_name = "group";
    protected $conn;
    
 
    public function __construct(){
        $this->conn=parent::getConnection();   
    }
    
    public function readAllGroups(){
        try{
            $query = "SELECT * FROM `$this->table_name` ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();

            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $groups[]=new Group($donnees);
                }

            return $groups;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
}


