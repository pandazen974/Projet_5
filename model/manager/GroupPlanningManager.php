<?php

Class GroupPlanningManager extends Database{
    
    private $table_name = "groupPlanning";
    protected $conn;
    
 
    public function __construct(){
        $this->conn=parent::getConnection();
    }
    
    public function setGroupPlanning(GroupPlanning $groupPlanning){
        try{
            $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    groupId=:groupId, planningId=:planningId";
 
            $stmt = $this->conn->prepare($query);
            $groupId= htmlspecialchars($groupPlanning->groupId());
            $planningId= htmlspecialchars($groupPlanning->planningId());
            $stmt->bindParam(':groupId',$groupId,PDO::PARAM_INT);
            $stmt->bindParam(':planningId',$planningId,PDO::PARAM_INT);
            $stmt->execute(); 
            return $groupPlanning;
    }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}

