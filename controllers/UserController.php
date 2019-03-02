<?php

class UserController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function registerUser(){
    $userManager=new UserManager();
    if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['address']) AND !empty($_POST['city']) AND !empty($_POST['postalCode']) AND !empty($_POST['telNumber']) AND !empty($_POST['birth']) AND !empty($_POST['email'])   AND !empty($_POST['registrationDate'])){
                $user=new User(['lastName'=>$_POST['lastName'],'firstName'=>$_POST['firstName'],'middleName'=>$_POST['middleName'],'address'=>$_POST['address'],'city'=>$_POST['city'],'postalCode'=>$_POST['postalCode'],'telNumber'=>$_POST['telNumber'],'birth'=>$_POST['birth'],'email'=>$_POST['email'],'registrationDate'=>$_POST['registrationDate']]);
                $newUser=$userManager->createUser($user);
                $this->smarty->assign('newUser', $newUser);
                $this->smarty->display('view/profileForm.tpl');
                
    }else{
            $this->smarty->display('view/userForm.tpl');
    }
    
    }
    
    public function listAllUsers(){
        $userManager=new UserManager();
        $users=$userManager->readAllUsers();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/usersList.tpl');
    }
    
    public function listAllTeachers(){
        $userManager=new UserManager();
        $users=$userManager->readTeachersOnly();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/usersList.tpl');
    }
    
    
    public function openUserUpdateForm(){
        $userManager=new UserManager();
        $user=$userManager->readSelectedUser($_GET['id']);
        var_dump($user);
        $this->smarty->assign('user',$user);
        $this->smarty->display('view/userUpdateForm.tpl');
   
    }
    
    public function modifyUser(){
        $userManager=new UserManager();
        if(!empty($_POST['lastName']) AND !empty($_POST['firstName']) AND !empty($_POST['address']) AND !empty($_POST['city']) AND !empty($_POST['postalCode']) AND !empty($_POST['telNumber']) AND !empty($_POST['birth']) AND !empty($_POST['email'])   AND !empty($_POST['registrationDate'])){
                $user=new User(['lastName'=>$_POST['lastName'],'firstName'=>$_POST['firstName'],'middleName'=>$_POST['middleName'],'address'=>$_POST['address'],'city'=>$_POST['city'],'postalCode'=>$_POST['postalCode'],'telNumber'=>$_POST['telNumber'],'birth'=>$_POST['birth'],'email'=>$_POST['email'],'registrationDate'=>$_POST['registrationDate'],'id'=>$_GET['id']]);
                $newUser=$userManager->updateUser($user);
                var_dump($user);
        }
              $users=$userManager->readAllUsers();
              $this->smarty->assign('users', $users);
              $this->smarty->display('view/usersList.tpl');
    }
    
    public function eraseUser(){
        $usersProfileManager=new UsersProfileManager();
        $userProfile=$usersProfileManager->readSelectedUserProfile($_GET['id']);
        $usersProfileManager->deleteUserProfile($userProfile);
        $studentsGroupManager=new StudentsGroupManager();
        $studentGroup=$studentsGroupManager->readSelectedStudentGroup($_GET['id']);
        $studentsGroupManager->deleteStudentGroup($studentGroup);
        $userManager=new UserManager();
        $selectedUser=$userManager->readSelectedUser($_GET['id']);
        $userManager->deleteUser($selectedUser);
        $users=$userManager->readAllUsers();
        $this->smarty->assign('users', $users);
        $this->smarty->display('view/usersList.tpl');
    }
    
    
}
