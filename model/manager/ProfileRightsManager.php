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
            var_dump($profileRights);
            return $profileRights;
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    
    public function showAdminRights(){
        try{
            $query = "SELECT u.id, u.lastName, u.firstName, p.profileName, r.rightName FROM user AS u 
                INNER JOIN usersprofile AS up ON u.id = up.userId 
                INNER JOIN profile as p ON up.profileId=p.id
                INNER JOIN profilerights AS pr ON pr.profileId=p.id
                INNER JOIN rights AS r ON r.id=pr.rightsId
                WHERE profileName='Administrateur'
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();

            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $user[]=new User($donnees);
                }
            return $user;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
}