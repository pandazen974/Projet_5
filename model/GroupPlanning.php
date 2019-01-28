<?php

class GroupPlanning{
    private $planningId;
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
public function planningId()
{

    return $this->_planningId;

}

public function groupId()
{
    
    return $this->_groupId;
    
}
  
  //SETTERS
public function setPlanningId($planningId)
{

    $this->_planningId = $planningId;

}

public function setgroupId($groupId)
{
    
    $this->_groupId=$groupId;
    
}
  
}

