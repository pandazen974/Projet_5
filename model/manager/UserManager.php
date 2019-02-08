<?php

Class UserManager extends Database{
    
    private $table_name = "user";
    protected $conn;
 
    public function __construct(){
        $this->conn=parent::getConnection();
       
    }
    
    public function createUser(User $user){
        try{
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    lastName=:lastName, firstName=:firstName, middleName=:middleName, address=:address, telNumber=:telNumber, birth=:birth, email=:email, registrationDate=NOW()";
        $stmt = $this->conn->prepare($query);
        $lastName= htmlspecialchars($user->lastName());
        $firstName= htmlspecialchars($user->firstName());
        $middleName= htmlspecialchars($user->middleName());
        $address= htmlspecialchars($user->address());
        $telNumber=htmlspecialchars($user->telNumber());
        $birth=htmlspecialchars($user->birth());
        $email= htmlspecialchars($user->email());
        $stmt->bindParam(':lastName',$lastName);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':middleName',$middleName);
        $stmt->bindParam(':address',$address);
        $stmt->bindParam(':telNumber',$telNumber);
        $stmt->bindParam(':birth',$birth);
        $stmt->bindParam(':email',$email);
        $stmt->execute();
        return $user;
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function readAllUsers(){
    try{
        $query = "SELECT *,DATE_FORMAT(registrationDate, 'publié le %d/%m/%Y à %H:%i:%s') as registrationDate

            FROM
                " . $this->table_name . "
            ORDER BY
                id
           ";

    $stmt = $this->conn->prepare( $query );
    $stmt->execute();

    while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
    {
        $users[]=new User($donnees);
    }

    return $users;

    }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
       public function updateUser(User $user){
        try{
    $query = "UPDATE user
                    SET lastName=:lastName, firstName=:firstName, middleName=:middleName, address=:address, telNumber=:telNumber, birth=:birth, email=:email , registrationDate=NOW(), groupId=:groupId, planningId=:planningId
                    WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $lastName= htmlspecialchars($user->lastName());
        $firstName= htmlspecialchars($user->firstName());
        $middleName= htmlspecialchars($user->middleName());
        $address= htmlspecialchars($user->address());
        $telNumber=htmlspecialchars($user->telNumber());
        $birth=htmlspecialchars($user->birth());
        $email= htmlspecialchars($user->email());
        $stmt->bindParam(':lastName',$lastName);
        $stmt->bindParam(':firstName',$firstName);
        $stmt->bindParam(':middleName',$middleName);
        $stmt->bindParam(':address',$address);
        $stmt->bindParam(':telNumber',$telNumber);
        $stmt->bindParam(':birth',$birth);
        $stmt->bindParam(':email',$email);
        $stmt->execute();  
        }
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function deleteUser(User $user){
    try{
    $query = "DELETE FROM user WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $id=$user->id();
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    }
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
}