<?php

class Pages{
    private $id;
    private $pageName;
    private $content;
        
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
  
public function pageName()
{

    return $this->_pageName;

}

public function content()
{
    
     return $this->_content;
  
}


  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setPageName($pageName)
{

    $this->_pageName = $pageName;

}

public function setContent($content)
{
    $this->_content = $content;
}

   
}