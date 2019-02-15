<?php
class StudentsGroupController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
public function registerStudentsGroup(){
    $studentsGroupManager=new StudentsGroupManager();
    
                $studentsGroup=new StudentsGroup(['userId'=>$_GET['id'],'groupId'=>$_POST['promotion']]);
                $theStudentsGroup=$studentsGroupManager->setStudentsGroup($studentsGroup);
                $this->smarty->assign('theStudentsGroup', $theStudentsGroup);
                $userManager=new UserManager();
                $users=$userManager->readAllUsers();
                $this->smarty->assign('users', $users);
                $this->smarty->display('view/usersList.tpl');            
    }
}