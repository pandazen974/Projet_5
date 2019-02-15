<?php

Class StudentsGroupManager extends Database{
    
    protected $conn;
    private $table_name = "studentsGroup";
 
    public function __construct(){
        $this->conn=parent::getConnection();
       
    }
    
public function setStudentsGroup(StudentsGroup $studentsGroup){
    try{
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    userId=:userId, groupId=:groupId";
 
        $stmt = $this->conn->prepare($query);
        $userId= htmlspecialchars($studentsGroup->userId());
        $groupId= htmlspecialchars($studentsGroup->groupId());
        $stmt->bindValue(':userId',$userId);
        $stmt->bindValue(':groupId',$groupId);
        $stmt->execute();
        return $studentsGroup;
    }
    catch (Exception $e){
        exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
    }

    
    }

}
