<?php

class Jobs{
    private $id;
    private $title;
    private $content;
    private $address;
    private $telNumber;
    private $postDate;
        
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

public function content()
{

    return $this->_content;

}

public function address()
{

    return $this->_address;

}

public function telNumber()
{

    return $this->_image;

}

public function postDate()
{

    return $this->_postDate;

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

public function setContent($content)
{

    $this->_content = $content;
        
}

public function setTelNumber($telNumber)
{
      
    $this->_telNumber=$telNumber;
      
}
  
public function setPostDate($postDate)
{
      
    $this->_postDate=$postDate;
      
}



}



