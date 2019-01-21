<?php

class News{
    private $id;
    private $title;
    private $article;
    private $articleDate;
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
  
public function title()
{

    return $this->_lastName;

}

public function article()
{

    return $this->_firstName;

}

public function articleDate()
{

    return $this->_middleName;

}

public function images()
{

    return $this->_images;

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

public function setArticle($article)
{

    $this->_article = $article;
        
}
  
public function setArticleDate($articleDate)
{
      
    $this->_articleDate=$articleDate;
      
}

public function setImage($image)
{
      
    $this->_image=$image;
      
}

}

