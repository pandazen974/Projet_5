<?php

Class NewsManager extends Database{
    
    private $table_name = "news";
    protected $conn;
 
    public function __construct(){
        $this->conn=parent::getConnection();
       
    }
    
    public function createNews(News $news){
       
        try{
            $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                 title=:title, content=:content, imageName=:imageName, imageDescription=:imageDescription, newsDate=NOW()";
            $stmt = $this->conn->prepare($query);
            $title= htmlspecialchars($news->title());
            $content= htmlspecialchars($news->content());
            $imageName= htmlspecialchars($news->imageName());
            $imageDescription= htmlspecialchars($news->imageDescription());
            $stmt->bindParam(':title',$title,PDO::PARAM_STR);
            $stmt->bindParam(':content',$content,PDO::PARAM_STR);
            $stmt->bindParam(':imageName',$imageName,PDO::PARAM_STR);
            $stmt->bindParam(':imageDescription',$imageDescription,PDO::PARAM_STR);
           $stmt->execute();
            return $news;
        }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
        
        }
    
    
        public function readAllNews($start,$end){
        try{
           
            
            $query = "SELECT *,DATE_FORMAT(newsDate, '%d/%m/%Y') as newsDate

            FROM
                " . $this->table_name . "
            LIMIT :end 
            OFFSET :start
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->bindValue('end',$end,PDO::PARAM_INT);
            $stmt->bindValue('start', $start, PDO::PARAM_INT);
            $stmt->execute();
            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $news[]=new News($donnees);
                }
            return $news;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
        public function countAll(){
        $query = "SELECT id FROM " . $this->table_name . "";
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        $num = $stmt->rowCount();
        return $num;
        }
    
    public function updateNews(News $news){
        try{
            $query = "UPDATE news
                    SET
                    title=:title, content=:content, imageName=:imageName, imageDescription=:imageDescription
                    WHERE id =:id";
            $stmt = $this->conn->prepare($query);
            $id=htmlspecialchars($news->id());
            $title= htmlspecialchars($news->title());
            $content= htmlspecialchars($news->content());
            $imageName= htmlspecialchars($news->imageName());
            $imageDescription= htmlspecialchars($news->imageDescription());
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->bindParam(':title',$title,PDO::PARAM_STR);
            $stmt->bindParam(':content',$content,PDO::PARAM_STR);
            $stmt->bindParam(':imageName',$imageName,PDO::PARAM_STR);
            $stmt->bindParam(':imageDescription',$imageDescription,PDO::PARAM_STR);
            $stmt->execute();
            return $news;
            }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function readSelectedNews($id){
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
            $selectedNews=null;
            }else{
            $selectedNews=new News($row);
            }
            return $selectedNews;
            }
            catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
            
    }
    
    public function deleteNews(News $news){
        try{
            $query = "DELETE FROM news WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $id=$news->id();
            $stmt->bindParam(':id', $id,PDO::PARAM_INT);
            $stmt->execute();
        }
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}
