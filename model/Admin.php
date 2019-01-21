<?php

class Admin{
    private $id;
    private $lastName;
    private $firstName;
    private $middleName;
    private $email;
    private $password;
       
public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }
    
public function hydrate(array $donnees)
{
  foreach ($donnees as $key => $value)
  {
    // nom du setter correspondant à l'attribut
    $method = 'set'.ucfirst($key);
        
    // Si le setter correspondant existe.
    if (method_exists($this, $method))
    {
      // On appelle le setter.
      $this->$method($value);
    }
  }
}

//GETTERS
public function id()
{
      
    return $this->_id;
      
}
  
public function lastName()
{

    return $this->_lastName;

}

public function firstName()
{

    return $this->_firstName;

}

public function middleName()
{

    return $this->_middleName;

}
  
public function email()
{

    return $this->_email;

}
  
public function password()
{

    return $this->_password;

}
  
  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setLastName($lastName)
{

    $this->_lastName = $lastName;

}

  

public function setFirstName($firstName)
{

    $this->_firstName = $firstName;
        
}
  
public function setMiddleName($middleName)
{
      
    $this->_middleName=$middleName;
      
}

public function setEmail($email)
{
      
    $this->_email=$email;
      
}

public function setPassword($password)
{
      
    $this->_password=$password;
      
}
   
}

