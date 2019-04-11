<?php

class ProfileRightsController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function addProfileRights(){
        
     $profileRightsManager=new ProfileRightsManager();
        
        foreach($_POST['cases'] as $value)
            
    {
            var_dump($value);
        
        $profileRight= new ProfileRights(['profileId'=>$_GET['id'], 'rightsId'=>$value]);
        $profileRights= $profileRightsManager->createProfileRights($profileRight);
    }
      
         
        $this->smarty->assign('profileRights',$profileRights);
        var_dump($profileRights);
        $this->smarty->display('view/home.tpl');
    }
}

