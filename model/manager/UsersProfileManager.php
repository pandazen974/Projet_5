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
        $userId= htmlspecialchars($userId->lastName());
        $profileId= htmlspecialchars($profileId->firstName());
        $stmt->bindValue(':userId',$userId);
        $stmt->bindValue(':profileId',$profileId);
        $stmt->execute(); 
    }
    
    catch (Exception $e){
        exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
    }
    }
    
}

