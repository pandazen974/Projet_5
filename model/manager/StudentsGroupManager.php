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
    
public function readSelectedStudentGroup($userId){
    try{
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
            $selectedStudentGroup=null;
            }else{
            $selectedStudentGroup=new StudentsGroup($row);
            }
            return $selectedStudentGroup;
            }
            
    catch (Exception $e){
        exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
    }
}
    
public function deleteStudentGroup(StudentsGroup $studentsGroup){
    try{
            $query = "DELETE FROM studentsgroup WHERE userId = :userId";
            $stmt = $this->conn->prepare($query);
            $userId=$studentsGroup->userId();
            $stmt->bindParam(':userId', $userId,PDO::PARAM_INT);
            $stmt->execute();
        }
    catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}
