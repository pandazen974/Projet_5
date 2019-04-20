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
                 lastName=:lastName, firstName=:firstName, middleName=:middleName, address=:address, city=:city, postalCode=:postalCode, telNumber=:telNumber, birth=:birth, email=:email, registrationDate=NOW()";
            $stmt = $this->conn->prepare($query);
            $lastName= htmlspecialchars($user->lastName());
            $firstName= htmlspecialchars($user->firstName());
            $middleName= htmlspecialchars($user->middleName());
            $address= htmlspecialchars($user->address());
            $city= htmlspecialchars($user->city());
            $postalCode= htmlspecialchars($user->postalCode());
            $telNumber=htmlspecialchars($user->telNumber());
            $birth=htmlspecialchars($user->birth());
            $email= htmlspecialchars($user->email());
            $stmt->bindParam(':lastName',$lastName,PDO::PARAM_STR);
            $stmt->bindParam(':firstName',$firstName,PDO::PARAM_STR);
            $stmt->bindParam(':middleName',$middleName,PDO::PARAM_STR);
            $stmt->bindParam(':address',$address,PDO::PARAM_STR);
            $stmt->bindParam(':city',$city,PDO::PARAM_STR);
            $stmt->bindParam(':postalCode',$postalCode,PDO::PARAM_INT);
            $stmt->bindParam(':telNumber',$telNumber);
            $stmt->bindParam(':birth',$birth,PDO::PARAM_STR);
            $stmt->bindParam(':email',$email,PDO::PARAM_STR);
            $stmt->execute();
            $user->setId($this->conn->lastInsertId());
            return $user;
        
        }
        
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function readSelectedUser($id){
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
            $selectedUser=null;
            }else{
            $selectedUser=new User($row);
            }
            return $selectedUser;
            }
    
    public function readAllUsers(){
        try{
            $query = "SELECT *,DATE_FORMAT(registrationDate, '%d/%m/%Y') as registrationDate,DATE_FORMAT(birth, '%d/%m/%Y') as birth

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
    
    
    
    public function readAccount(){
        try{
            $query = "SELECT *,DATE_FORMAT(registrationDate, '%d/%m/%Y') as registrationDate,DATE_FORMAT(birth, '%d/%m/%Y') as birth

            FROM
                " . $this->table_name . "
            WHERE
                authorized = 0
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
    
    public function authorizeAccount(User $user){
        try{
            $query = "UPDATE user
                    SET
                    authorized=:authorized
                    WHERE id=:id";
            $stmt = $this->conn->prepare($query);
            $authorized=htmlspecialchars($user->authorized());
            $id= htmlspecialchars($user->id());
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->bindParam(':authorized',$authorized,PDO::PARAM_STR);
            $stmt->execute();
            return $user;
            }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function readTeachersOnly(){
        try{
            $query = "SELECT u.id, u.lastName, u.firstName FROM user AS u
                INNER JOIN usersprofile AS up ON u.id = up.userId 
                INNER JOIN profile as p ON up.profileId=p.id
                WHERE profileName = 'Enseignant'
                ORDER BY lastName
           ";

            $stmt = $this->conn->prepare( $query );
            $stmt->execute();

            while($donnees=$stmt->fetch(\PDO::FETCH_ASSOC))
                {
                    $user[]=new User($donnees);
                }
            return $user;

            }
    
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    
    }
    
    public function updateUser(User $user){
        try{
            $query = "UPDATE user
                    SET
                    lastName=:lastName, firstName=:firstName, middleName=:middleName, address=:address, city=:city, postalCode=:postalCode, telNumber=:telNumber, birth=:birth, email=:email, registrationDate=NOW()
                    WHERE id =:id";
            $stmt = $this->conn->prepare($query);
            $lastName= htmlspecialchars($user->lastName());
            $firstName= htmlspecialchars($user->firstName());
            $middleName= htmlspecialchars($user->middleName());
            $address= htmlspecialchars($user->address());
            $city= htmlspecialchars($user->city());
            $postalCode= htmlspecialchars($user->postalCode());
            $telNumber=htmlspecialchars($user->telNumber());
            $birth=htmlspecialchars($user->birth());
            $email= htmlspecialchars($user->email());
            $id= htmlspecialchars($user->id());
            $stmt->bindParam(':lastName',$lastName,PDO::PARAM_STR);
            $stmt->bindParam(':firstName',$firstName,PDO::PARAM_STR);
            $stmt->bindParam(':middleName',$middleName,PDO::PARAM_STR);
            $stmt->bindParam(':address',$address,PDO::PARAM_STR);
            $stmt->bindParam(':city',$city,PDO::PARAM_STR);
            $stmt->bindParam(':postalCode',$postalCode,PDO::PARAM_INT);
            $stmt->bindParam(':telNumber',$telNumber,PDO::PARAM_INT);
            $stmt->bindParam(':birth',$birth,PDO::PARAM_STR);
            $stmt->bindParam(':email',$email,PDO::PARAM_STR);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return $user;
            }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function updatePassword(User $user){
        try{
            $query = "UPDATE user
                    SET
                    password=:password, authorized=:authorized
                    WHERE email=:email";
            $stmt = $this->conn->prepare($query);
            $email= htmlspecialchars($user->email());
            $protected= htmlspecialchars($user->password());
            $password=password_hash($protected,PASSWORD_DEFAULT);
            $authorized=htmlspecialchars($user->authorized());
            $stmt->bindParam(':password',$password,PDO::PARAM_STR);
            $stmt->bindParam(':authorized',$authorized,PDO::PARAM_STR);
            $stmt->bindParam(':email',$email,PDO::PARAM_STR);
            $stmt->execute();
            return $user;
            }
            
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function getHashedPassword(User $user){
        $hash=$user->password();
        return $hash;
    }
    
    public function verifyUserExistence($email){
            try{
            $query = "SELECT*
            FROM
                " . $this->table_name . "
            WHERE
                email =:email";
   
    $stmt = $this->conn->prepare( $query );
    $stmt->bindParam(':email', $email);
    $stmt->execute();
   
    $theUser = $stmt->fetch(\PDO::FETCH_ASSOC);
    if ($theUser===false){
        $user=null;
    }else{
    $user=new User($theUser);
    }
    return $user;
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
            $stmt->bindParam(':id', $id,PDO::PARAM_INT);
            $stmt->execute();
        }
        catch (Exception $e){
            exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
        }
    }
    
    public function endSession(){
        session_unset(); 
    }
}