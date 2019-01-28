<?php

class StagesPost{
    private $postId;
    private $stageId;
        
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
public function postId()
{
      
    return $this->_postId;
      
}
  
public function stageId()
{

    return $this->_stageId;

}

  //SETTERS
public function setPostId($postId)
{

    $this->_postId = $postId;

}

public function setStageId($stageId)
{

    $this->_stageId = $stageId;

}

}

