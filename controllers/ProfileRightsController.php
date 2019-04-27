<?php

class ProfileRightsController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function addProfileRights(){
        
     $profileRightsManager=new ProfileRightsManager();
        
        foreach($_POST['cases'] as $value)
            
    {
            
        $profileRight= new ProfileRights(['profileId'=>$_GET['id'], 'rightsId'=>$value]);
        $profileRights= $profileRightsManager->createProfileRights($profileRight);
    }
      
    $this->smarty->assign('profileRights',$profileRights);
     header("Location: http://localhost/Projet_5/index.php?");
    }
    
    public function showProfileRights(){
        $profileRightsManager=new ProfileRightsManager();
        $cases=$profileRightsManager->selectProfileRights($_POST['profile']);
        $rightsManager=new RightsManager();
        $allRights=$rightsManager->readAllRights();  
        $this->smarty->assign('allRights',$allRights);
        $this->smarty->assign('cases',$cases);
        $this->smarty->display('view/updateRightsForm.tpl');
        
    }
    
    public function modifyProfileRights(){
        
     $profileRightsManager=new ProfileRightsManager();
     $profileRights=$profileRightsManager->getSelectedProfileRights($_GET['id']);
     $profileRightsManager->deleteProfileRights($profileRights);
     foreach($_POST['newRights'] as $value)      
    {
        $profileRight= new ProfileRights(['profileId'=>$_GET['id'], 'rightsId'=>$value]);
        $newProfileRights= $profileRightsManager->createProfileRights($profileRight);
    }
       
    $this->smarty->assign('newProfileRights',$newProfileRights);
     header("Location: http://localhost/Projet_5/index.php?");
    }
    
    public function openEraseProfileForm(){
        $profileManager=new ProfileManager;
        $profiles=$profileManager->readAllProfile();
        $this->smarty->assign('profiles',$profiles);
        $this->smarty->display('view/deleteProfileForm.tpl');
    }
    
    public function eraseProfileRights(){
     $profileRightsManager=new ProfileRightsManager();
     $profileRights=$profileRightsManager->getSelectedProfileRights($_POST['profile']);
     $profileRightsManager->deleteProfileRights($profileRights);
     $profileManager=new ProfileManager();
     $profile=$profileManager->getSelectedProfile($_POST['profile']);
     $profileManager->deleteProfile($profile); 
     $profiles=$profileManager->readAllProfile();
     $this->smarty->assign('profiles',$profiles);
     $this->smarty->display('view/deleteProfileForm.tpl');
   
    }
}

