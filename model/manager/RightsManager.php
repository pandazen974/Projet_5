<?php

Class RightsManager extends Database{
    
    private $table_name = "rights";
    protected $conn;
 
    public function __construct(){
        $this->conn=parent::getConnection();
    }
    
    public function readAllRights(){
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
                    $rights[]=new Rights($donnees);
                }

            return $rights;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
}

}