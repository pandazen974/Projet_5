<?php

class StudentsGroup{
     
    private $id;
    private $userId;
    private $groupId;
   
        
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

public function userId()
{
    
    return $this->_userId;
    
}

public function groupId()
{

    return $this->_groupId;

}


  
  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setUserId($userId)
{
    
    $this->_userId=$userId;
    
}

public function setGroupId($groupId)
{

    $this->_groupId = $groupId;

}


  
}

