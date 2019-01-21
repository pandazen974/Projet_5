<?php

class Classes{
    private $id;
    private $className;
    private $schedule;
    private $teacherId;
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
public function id()
{
      
    return $this->_id;
      
}
  
public function className()
{

    return $this->_className;

}

public function schedule()
{

    return $this->_schedule;

}

public function teacherId()
{

    return $this->_teacherId;

}

public function studentId()
{

    return $this->_studentId;

}


  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setClassName($className)
{

    $this->_className = $className;

}

public function setSchedule($schedule)
{

    $this->_schedule = $schedule;
        
}

public function setTeacherId($teacherId)
{
      
    $this->_teacherId=$teacherId;
      
}
  
public function setStudentId($studentId)
{
      
    $this->_studentId=$studentId;
      
}



}

