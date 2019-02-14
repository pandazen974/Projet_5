<?php

class Profile{
    private $id;
    private $profileName;
        
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
  
public function profileName()
{

    return $this->_profileName;

}

  
  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setProfileName($profileName)
{

    $this->_profileName = $profileName;

}
   
}

