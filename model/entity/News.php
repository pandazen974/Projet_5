<?php

class News{
    private $id;
    private $image;
        
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
  
public function image()
{

    return $this->_image;

}
   
  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setImage($image)
{
      
    $this->_image=$image;
      
}

}

