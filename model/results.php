<?php

class Results{
    private $id;
    private $classId;
    private $teacherId;
    private $studentId;
    private $result;
        
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
  
public function classId()
{

    return $this->_classId;

}

public function teacherId()
{

    return $this->_teacherId;

}

public function studentId()
{

    return $this->_studentId;

}

public function result()
{

    return $this->_result;

}


  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setClassId($classId)
{

    $this->_classId = $classId;

}

public function setTeacherId($teacherId)
{

    $this->_teacherId = $teacherId;
        
}

public function setStudentId($studentId)
{
      
    $this->_studentId=$studentId;
      
}
  
public function setResults($results)
{
      
    $this->_results=$results;
      
}



}
