<?php

class PagesManager extends Database{
 
    private $table_name = "pages";
    protected $conn;
    
 
   public function __construct(){
        $this->conn=parent::getConnection();
       
    }
    
public function readAllPages(){
    try{
    $query = "SELECT *

            FROM
                " . $this->table_name . "
            ORDER BY
                id
           ";

    $stmt = $this->conn->prepare( $query );
    $stmt->execute();

    while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
    {
        $pages[]=new Pages($donnees);
    }

    return $pages;
    }
    catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
    }
    
}

public function readPageWithId($id){
    try{
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
            $selectedPage=null;
            }else{
            $selectedPage=new Pages($row);
            }
            return $selectedPage;
    }
    catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
    }
}

public function updatePage(Pages $pages){
        try{
            $query = "UPDATE pages
                    SET
                    content=:content
                    WHERE id=:id";
            $stmt = $this->conn->prepare($query);
            $content= $pages->content();
            $id= $pages->id();
            $stmt->bindParam(':content',$content,PDO::PARAM_STR);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return $pages;
            }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
}
}