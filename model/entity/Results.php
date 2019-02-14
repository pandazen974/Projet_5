<?php

class Results{
    private $id;
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
  
public function result()
{

    return $this->_result;

}


  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setResult($result)
{
      
    $this->_result=$result;
      
}

}
