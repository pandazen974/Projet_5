<?php

class News{
    private $id;
    private $title;
    private $details;
    private $room;
    private $studentsId;
        
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
  
public function title()
{

    return $this->_title;

}

public function details()
{

    return $this->_details;

}

public function room()
{

    return $this->_room;

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

public function setTitle($title)
{

    $this->_title = $title;

}

public function setDetails($details)
{

    $this->_details = $details;
        
}
  
public function setRoom($room)
{
      
    $this->_room=$room;
      
}

public function setStudentsId($studentsId)
{
      
    $this->_studentsId=$studentsId;
      
}

}

