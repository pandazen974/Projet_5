<?php

class ProfileController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function openNewProfileForm (){
        $this->smarty->display('view/newProfile.tpl');
    }
    
    public function listAllProfile(){
        $profileManager=new ProfileManager;
        $profiles=$profileManager->readAllProfile();
        $this->smarty->assign('profiles',$profiles);
        $this->smarty->display('view/profileListForm.tpl');
    }
    
    public function addProfile (){
        $profileManager=new ProfileManager;
        $profile=new Profile(['profileName'=>$_POST['profile']]);
        $newProfile=$profileManager->createProfile($profile);
        $this->smarty->assign('newProfile', $newProfile);
        $rightsManager=new RightsManager();
        $allRights=$rightsManager->readAllRights();
        $this->smarty->assign('allRights',$allRights);
        $this->smarty->display('view/rights.tpl');
    }
    
 
       
}
