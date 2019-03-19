<?php

class News{
    private $id;
    private $title;
    private $content;
    private $imageName;
    private $imageDescription;
    private $newsDate;
        
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
  
public function imageName()
{

    return $this->_imageName;

}

public function imageDescription()
{

    return $this->_imageDescription;

}

public function newsDate()
{

    return $this->_newsDate;

}
   
  //SETTERS
public function setId($id)
{

    $this->_id = $id;

}

public function setTitle($title)
{
      
    $this->_title=$title;
      
}

public function setContent($content)
{
      
    $this->_content=$content;
      
}



public function setImageName($imageName)
{
      
    $this->_imageName=$imageName;
      
}

public function setImageDescription($imageDescription)
{

   $this->_imageDescription=$imageDescription;

}

public function setNewsDate($newsDate)
{

    $this->_setNewsDate=$newsDate;

}

}

