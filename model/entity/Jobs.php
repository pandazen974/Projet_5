<?php

class Jobs{
    private $id;
    private $telNumber;
    private $address;
      
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
  
public function telNumber()
{

    return $this->_telNumber;

}

public function address()
{

    return $this->_address;

}

//SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setTelNumber($telNumber)
{

    $this->_telNumber = $telNumber;

}

public function setAddress($address)
{

    $this->_address = $address;
        
}

}



