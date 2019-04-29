<?php

Class ProfileManager extends Database{
    
    private $table_name = "profile";
    protected $conn;
 
    public function __construct(){
        
        $this->conn=parent::getConnection();  
    }
    
    public function readAllProfile(){
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
                    $profile[]=new Profile($donnees);
                }

            return $profile;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function createProfile(Profile $profile){
        try{
            $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                 profileName=:profile";
            $stmt = $this->conn->prepare($query);
            $profileName= htmlspecialchars($profile->profileName());
            $stmt->bindParam(':profile',$profileName,PDO::PARAM_STR);
            $stmt->execute();
            $profile->setId($this->conn->lastInsertId());
            return $profile;
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function getSelectedProfile($id){
       try{
            $query = "SELECT*
                FROM
                    " . $this->table_name . "
                WHERE
                id=:id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
             while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $profile=new Profile($donnees);
                }
            return $profile;
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }      
    
     public function deleteProfile(Profile $profile){
        try{
            $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                id=:id";
            $stmt = $this->conn->prepare($query);
            $id= htmlspecialchars($profile->id());
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}

