<?php
class UsersProfileController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
public function registerUsersProfile(){
    $usersProfileManager=new UsersProfileManager();
    
                $usersProfile=new UsersProfile(['userId'=>$_GET['id'],'profileId'=>$_POST['profile']]);
                if($_POST['profile']==="Etudiant") {
                    $newUserProfile=$usersProfileManager->setUsersProfile($usersProfile);
                    $this->smarty->assign('newUserProfile', $newUserProfile);
                    var_dump($newUserProfile);
                    $this->smarty->display('view/groupForm.tpl');
                }else{
                    $userManager=new UserManager();
                    $newUserProfile=$usersProfileManager->setUsersProfile($usersProfile);
                    $users=$userManager->readAllUsers();
                    $this->smarty->assign('users', $users);
                    $this->smarty->display('view/usersList.tpl'); 
                }
    }
    
}