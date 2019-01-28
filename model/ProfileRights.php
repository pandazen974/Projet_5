<?php

class ProfileRights{
    private $profileId;
    private $rightsId;
        
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
public function profileId()
{

    return $this->_profileId;

}

public function rightsId()
{
    
    return $this->_rightsId;
    
}
  
  //SETTERS
public function setProfileId($profileId)
{

    $this->_profileId = $profileId;

}

public function setRightsId($rightsId)
{
    
    $this->_rightsId=$rightsId;
    
}
  
}





