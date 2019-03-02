<?php

class Classes{
    private $id;
    private $teachingUnit;
    private $title;
    
         
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

public function teachingUnit()
{

    return $this->_teachingUnit;

}

  
public function title()
{

    return $this->_title;

}

  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setTeachingUnit($teachingUnit)
{

    $this->_teachingUnit = $teachingUnit;

}

public function setTitle($title)
{

    $this->_title = $title;

}

}

