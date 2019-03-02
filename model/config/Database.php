<?php
class Database{
  
    protected $host = "localhost";
    protected $db_name = "dtsimrt";
    protected $username = "root";
    protected $password = "";
    
  
    
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
            $this->conn->exec("SET NAMES 'UTF8'");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}