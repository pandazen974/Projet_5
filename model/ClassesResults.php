<?php

class ClassesResults{
    private $resultId;
    private $classId;
    private $planningId;
        
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
public function resultId()
{
      
    return $this->_resultId;
      
}
  
public function classId()
{

    return $this->_classId;

}

public function planningId()
{

    return $this->_planningId;

}

  //SETTERS
public function setResultId($resultId)
{

    $this->_resultId = $resultId;

}

public function setClassId($classId)
{

    $this->_classd = $classId;

}

public function setPlanningId($planningId)
{
      
    $this->_planningId=$planningId;
      
}

}

