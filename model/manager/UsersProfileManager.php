<?php

Class UsersProfileManager extends Database{
    
    private $table_name = "usersProfile";
    protected $conn;
 
    public function __construct(){
        $this->conn=parent::getConnection();
       
    }
    
    public function setUsersProfile(UsersProfile $usersProfile){
        try{
            $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    userId=:userId, profileId=:profileId";
 
            $stmt = $this->conn->prepare($query);
            $userId= htmlspecialchars($usersProfile->userId());
            $profileId= htmlspecialchars($usersProfile->profileId());
            $stmt->bindParam(':userId',$userId,PDO::PARAM_INT);
            $stmt->bindParam(':profileId',$profileId,PDO::PARAM_INT);
            $stmt->execute(); 
            return $usersProfile;
    }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
         public function readSelectedUserProfile($userId){
            $query = "SELECT *
            FROM
                " . $this->table_name . "
            WHERE
                userId = :userId
            LIMIT
                0,1";
   
            $stmt = $this->conn->prepare( $query );
            $stmt->bindParam(':userId', $userId,PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
            if($row===false){
            $selectedUserProfile=null;
            }else{
            $selectedUserProfile=new UsersProfile($row);
            }
            return $selectedUserProfile;
            }
            
            public function returnUserProfile($email){
            $query = "SELECT up.profileId FROM usersprofile AS up 
                    INNER JOIN profile AS p ON up.profileId=p.id
                    INNER JOIN user AS u ON up.userId=u.id
                    WHERE u.email=:email";
   
            $stmt = $this->conn->prepare( $query );
            $stmt->bindParam(':email', $email,PDO::PARAM_STR);
            $stmt->execute();
            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $profile[]=$donnees;
                }
               
            return $profile;

            
            }
            
    
        public function deleteUserProfile(UsersProfile $usersProfile){
        try{
            $query = "DELETE FROM usersProfile WHERE userId = :userId";
            $stmt = $this->conn->prepare($query);
            $userId=$usersProfile->userId();
            $stmt->bindParam(':userId', $userId,PDO::PARAM_INT);
            $stmt->execute();
        }
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
}

