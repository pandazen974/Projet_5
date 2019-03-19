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
            var_dump($news);
            return $news;
        }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
        
        }
    
    
        public function readAllNews(){
        try{
            $query = "SELECT *,DATE_FORMAT(newsDate, '%d/%m/%Y') as newsDate

            FROM
                " . $this->table_name . "
            ORDER BY
                id
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();

            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $news[]=new News($donnees);
                }
                var_dump($news);
            return $news;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
}
