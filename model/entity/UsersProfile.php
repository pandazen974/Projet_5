<?php

class UsersProfile{
    private $userId;
    private $profileId;
        
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
public function userId()
{

    return $this->_userId;

}

public function profileId()
{
    
    return $this->_profileId;
    
}
  
  //SETTERS
public function setUserId($userId)
{

    $this->_userId = $userId;

}

public function setProfileId($profileId)
{
    
    $this->_profileId=$profileId;
    
}
  
}

