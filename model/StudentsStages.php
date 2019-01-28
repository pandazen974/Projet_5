<?php

class StudentsStages{
    private $stageId;
    private $studentId;
        
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
public function stageId()
{
      
    return $this->_stageId;
      
}
  
public function studentId()
{

    return $this->_studentId;

}


  //SETTERS
public function setStageId($stageId)
{

    $this->_stageId = $stageId;

}

public function setStudentId($studentId)
{
      
    $this->_studentId=$studentId;
      
}

}
