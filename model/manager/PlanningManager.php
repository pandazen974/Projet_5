<?php

Class PlanningManager extends Database{
    
    private $table_name = "planning";
    protected $conn;
    
 
   public function __construct(){
        $this->conn=parent::getConnection();
       
    }
    
    public function readPlanning(){
        try{
            $query = "SELECT title,start,end

            FROM
                " . $this->table_name . "
            ORDER BY
                id
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
    
    public function createPlanning(Planning $planning){
        try{
            $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                 title=:title,start=:start, end=:end, userId=:userId";
            $stmt = $this->conn->prepare($query);
            $title=htmlspecialchars($planning->title());
            $start= htmlspecialchars($planning->start());
            $end= htmlspecialchars($planning->end());
            $userId= htmlspecialchars($planning->userId());
            $stmt->bindParam(':title',$title,PDO::PARAM_STR);
            $stmt->bindParam(':start',$start,PDO::PARAM_STR);
            $stmt->bindParam(':end',$end,PDO::PARAM_STR);
            $stmt->bindParam(':userId',$userId,PDO::PARAM_INT);
            $stmt->execute();
            $planning->setId($this->conn->lastInsertId());
            var_dump($planning);
            return $planning;
        }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
        
        }
        
    public function updatePlanning(Planning $planning){
        try{
            $query = "UPDATE
                    " . $this->table_name . "
                SET
                 title=:title,start=:start, end=:end";
            $stmt = $this->conn->prepare($query);
            $title=htmlspecialchars($planning->title());
            $start= htmlspecialchars($planning->start());
            $end= htmlspecialchars($planning->end());
            $stmt->bindParam(':title',$title,PDO::PARAM_STR);
            $stmt->bindParam(':start',$start,PDO::PARAM_STR);
            $stmt->bindParam(':end',$end,PDO::PARAM_STR);
            $stmt->execute();
            return $planning;
        }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
        
        }
        
    public function readSelectedPlanning($id){
            $query = "SELECT *
            FROM
                " . $this->table_name . "
            WHERE
                id = :id
            LIMIT
                0,1";
   
            $stmt = $this->conn->prepare( $query );
            $stmt->bindParam(':id', $id,PDO::PARAM_INT);
            $stmt->execute();
            $row = $stmt->fetch(\PDO::FETCH_ASSOC);
            if($row===false){
            $selectedPlanning=null;
            }else{
            $selectedPlanning=new Planning($row);
            }
            return $selectedPlanning;
            }
        
    public function deletePlanning(Planning $planning){
        try{
            $query = "DELETE FROM planning WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $id=$planning->id();
            $stmt->bindParam(':id', $id,PDO::PARAM_INT);
            $stmt->execute();
        }
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}

