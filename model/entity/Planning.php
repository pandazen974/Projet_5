<?php

class Planning{
    private $id;
    private $title;
    private $start;
    private $end;
    private $userId;
        
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
  
public function start()
{

    return $this->_start;

}

public function end()
{
    
    return $this->_end;
    
}

public function userId()
{
    return $this->_userId();
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

public function setStart($start)
{

    $this->_start = $start;

}

public function setEnd($end)
{
    
    $this->_end=$end;
    
}

public function setUserId($userId)
{
    
    $this->_userId=$userId;
    
}
 
}


