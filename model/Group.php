<?php

class Group{
    private $id;
    private $groupName;
    private $promotion;
        
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
  
public function groupName()
{

    return $this->_groupName;

}

public function promotion()
{
    
    return $this->_promotion;
    
}
  
  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setGroupName($groupName)
{

    $this->_groupName = $groupName;

}

public function setPromotion($promotion)
{
    
    $this->_promotion=$promotion;
    
}
  
}


