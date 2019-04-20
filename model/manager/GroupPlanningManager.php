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
    
    public function updateGroupPlanning(GroupPlanning $groupPlanning){
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
    
    public function readSelectedGroupPlanning($planningId){
            $query = "SELECT *
            FROM
                " . $this->table_name . "
            WHERE
                planningId = :planningId
            LIMIT
                0,1";
   
            $stmt = $this->conn->prepare( $query );
            $stmt->bindParam(':planningId', $planningId,PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
            if($row===false){
            $selectedGroupPlanning=null;
            }else{
            $selectedGroupPlanning=new GroupPlanning($row);
            }
            return $selectedGroupPlanning;
            }
            
                
    public function readPlanningOne(){
        try{
            $query = "SELECT p.id,p.title,p.start,p.end FROM planning AS p
                     INNER JOIN groupplanning AS gp ON gp.planningId=p.id
                     INNER JOIN `group` AS g ON g.id=gp.groupId
                     WHERE g.id='1';
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();
            $planning=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
            return $planning;
            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
    public function readPlanningTwo(){
        try{
            $query = "SELECT p.id,p.title,p.start,p.end FROM planning AS p
                     INNER JOIN groupplanning AS gp ON gp.planningId=p.id
                     INNER JOIN `group` AS g ON g.id=gp.groupId
                     WHERE g.id='2';
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();
            $planning=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
            return $planning;
            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
     public function readPlanningThree(){
        try{
            $query = "SELECT p.id,p.title,p.start,p.end FROM planning AS p
                     INNER JOIN groupplanning AS gp ON gp.planningId=p.id
                     INNER JOIN `group` AS g ON g.id=gp.groupId
                     WHERE g.id='3';
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();
            $planning=json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
            return $planning;
            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
    public function deleteGroupPlanning(GroupPlanning $groupPlanning){
        try{
            $query = "DELETE FROM groupPlanning WHERE planningId = :planningId";
            $stmt = $this->conn->prepare($query);
            $planningId=$groupPlanning->planningId();
            $stmt->bindParam(':planningId', $planningId,PDO::PARAM_INT);
            $stmt->execute();
        }
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}

