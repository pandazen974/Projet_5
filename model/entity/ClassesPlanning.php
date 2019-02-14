<?php

class ClassesPlanning{
    private $planningId;
    private $classesId;
        
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

public function classesId()
{
    
    return $this->_classesId;
    
}
  
  //SETTERS
public function setPlanningId($planningId)
{

    $this->_planningId = $planningId;

}

public function setClassesId($classesId)
{
    
    $this->_classesId=$classesId;
    
}
  
}


