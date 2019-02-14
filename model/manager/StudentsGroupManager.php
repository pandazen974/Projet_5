<?php

Class StudentsGroupManager{
    
    private $conn;
    private $table_name = "studentsGroup";
 
    public function __construct($db){
        $this->conn = $db;
    }
    
public function setUsersGroup(StudentsGroup $studentsGroup){
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    userId=:userId, groupId=:groupId";
 
        $stmt = $this->conn->prepare($query);
        $userId= htmlspecialchars($userId->lastName());
        $groupId= htmlspecialchars($groupId->firstName());
        $stmt->bindValue(':userId',$userId);
        $stmt->bindValue(':groupId',$groupId);
        $stmt->execute(); 
    }
}
