<?php

Class Controller{
    protected $smarty;
    
    public function useSmartyFonctions(){
        $this->smarty=new Smarty();
        return $this->smarty;
    }
            
}
