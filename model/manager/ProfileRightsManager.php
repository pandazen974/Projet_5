<?php

Class ProfileRightsManager extends Database{
    
   private $table_name = "profilerights";
    protected $conn;
 
    public function __construct(){
        $this->conn=parent::getConnection();
       
    }
    
    public function createProfileRights(ProfileRights $profileRights){
        try{
            $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                 profileId=:profileId, rightsId=:rightsId";
            $stmt = $this->conn->prepare($query);
            $profileId= htmlspecialchars($profileRights->profileId());
            $rightsId= htmlspecialchars($profileRights->rightsId());
            $stmt->bindParam(':profileId',$profileId,PDO::PARAM_INT);
            $stmt->bindParam(':rightsId',$rightsId,PDO::PARAM_INT);
            $stmt->execute();
            return $profileRights;
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    
    public function selectProfileRights($id){
        try{
            $query = "SELECT r.id FROM rights AS r 
                INNER JOIN profilerights AS pr ON r.id=pr.rightsId 
                INNER JOIN profile as p ON pr.profileId=p.id 
                WHERE p.id=:profileId;
                
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->bindValue(':profileId',$id,PDO::PARAM_INT);
            $stmt->execute();

            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $case[]=$donnees;
                }
            return $case;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
    public function getSelectedProfileRights($profileId){
       try{
            $query = "SELECT*
                FROM
                    " . $this->table_name . "
                WHERE
                profileId=:profileId";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':profileId',$profileId,PDO::PARAM_INT);
            $stmt->execute();
             while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $profileRights=new ProfileRights($donnees);
                }
            return $profileRights;
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }      
    
     public function deleteProfileRights(ProfileRights $profileRights){
        try{
            $query = "DELETE FROM
                    " . $this->table_name . "
                WHERE
                profileId=:profileId";
            $stmt = $this->conn->prepare($query);
            $profileId= htmlspecialchars($profileRights->profileId());
            $stmt->bindParam(':profileId',$profileId,PDO::PARAM_INT);
            $stmt->execute();
            return $profileRights;
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}