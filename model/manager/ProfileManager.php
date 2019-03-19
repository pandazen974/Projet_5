<?php

Class ProfileManager{
    
    private $conn;
    private $table_name = "profile";
 
    public function __construct($db){
        $this->conn = $db;
    }
    
        public function readAllStudents(){
        try{
            $query = "SELECT *,DATE_FORMAT(registrationDate, '%d/%m/%Y') as registrationDate,DATE_FORMAT(birth, '%d/%m/%Y') as birth

            FROM
                " . $this->table_name . "
            ORDER BY
                id
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();

            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $users[]=new User($donnees);
                }

            return $users;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
}

