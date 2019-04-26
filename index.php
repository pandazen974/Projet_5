<?php
session_start();
require "vendor/autoload.php";

$loader = new Nette\Loaders\RobotLoader;
$loader->addDirectory(__DIR__ . '/controllers');
$loader->addDirectory(__DIR__ . '/model/config');
$loader->addDirectory(__DIR__ . '/model/manager');
$loader->addDirectory(__DIR__ . '/model/entity');
$loader->addDirectory(__DIR__ . '/tpl');
// And set caching to the 'temp' directory
$loader->setTempDirectory(__DIR__ . '/temp');
$loader->register(); // Run the RobotLoader
$smarty = new Smarty();

try { 
    if (isset($_GET['action'])) {
        
        //News
        if ($_GET['action'] == 'openNewsForm') {
          $newsController=new NewsController();
          $newsController->openNewsForm();
        }
        
        if ($_GET['action'] == 'addNews') {
          $newsController=new NewsController();
          $newsController->addNews();
        }
        
        if ($_GET['action'] == 'readNews') {
          $newsController=new NewsController();
          $newsController->readNews();
        }
        
        if ($_GET['action'] == 'readOneNews') {
          $newsController=new NewsController();
          $newsController->readOneNews();
        }
        
        if ($_GET['action'] == 'openUpdateNewsForm') {
          $newsController=new NewsController();
          $newsController->openUpdateNewsForm();
        }
        
        if ($_GET['action'] == 'modifyNews') {
          $newsController=new NewsController();
          $newsController->modifyNews();
        }
        
        if ($_GET['action'] == 'eraseNews') {
          $newsController=new NewsController();
          $newsController->eraseNews();
        }
        
        //Users
        if ($_GET['action'] == 'openUserForm') {
          $smarty->display('view/userForm.tpl');
        }
        
        if ($_GET['action'] == 'registerUser') {
            $userController=new UserController();
            $userController->registerUser();
        }
        
        if ($_GET['action'] == 'registerUsersProfile') {
            $usersProfileController=new UsersProfileController();
            $usersProfileController->registerUsersProfile();
        }
        
        if ($_GET['action'] == 'registerStudentsGroup') {
            $studentsGroupController=new StudentsGroupController();
            $studentsGroupController->registerStudentsGroup();
        }
        
        if ($_GET['action'] == 'listAllUsers') {
          $userController=new UserController();
          $userController->listAllUsers();
        } 
        
        if ($_GET['action'] == 'openUserUpdateForm') {
          $userController=new UserController();
          $userController->openUserUpdateForm();
        }
        
        if ($_GET['action'] == 'modifyUser') {
            $userController=new UserController();
            $userController->modifyUser();
        }
        
         if ($_GET['action'] == 'eraseUser') {
            $userController=new UserController();
            $userController->eraseUser();
        }
        
        if ($_GET['action'] == 'createPassword') {
          $userController=new UserController();
          $userController->createPassword();
        }
        
        if ($_GET['action'] == 'openSession') {
          $userController=new UserController();
          $userController->openSession();
        }
        //Planning
        if ($_GET['action'] == 'openPlanningForm') {
          $classesController=new ClassesController();
          $classesController->listAllclasses();
        }
        
        if ($_GET['action'] == 'feedGroupOneEvents') {
          $planningController=new PlanningController();
          $planningController->feedGroupOneEvents();
        }
        
        if ($_GET['action'] == 'feedGroupTwoEvents') {
          $planningController=new PlanningController();
          $planningController->feedGroupTwoEvents();
        }
        
        if ($_GET['action'] == 'feedGroupThreeEvents') {
          $planningController=new PlanningController();
          $planningController->feedGroupThreeEvents();
        }
        
        if ($_GET['action'] == 'addEvent') {
          $planningController=new PlanningController();
          $planningController->addEvent();
        }
        
        if ($_GET['action'] == 'registerGroupPlanning') {
            $groupPlanningController=new GroupPlanningController();
            $groupPlanningController->registerGroupPlanning();
        }
        
        if ($_GET['action'] == 'readEvents') {
          $planningController=new PlanningController();
          $planningController->readEvents();
        }
      
        if ($_GET['action'] == 'openUpdatePlanningForm') {
          $planningController=new PlanningController();
          $planningController->openUpdatePlanningForm();
        }
        
        if ($_GET['action'] == 'modifyPlanning') {
          $planningController=new PlanningController();
          $planningController->modifyPlanning();
        }
        
        if ($_GET['action'] == 'erasePlanning') {
          $planningController=new PlanningController();
          $planningController->erasePlanning();
        }
        
        //Login
        
        if ($_GET['action'] == 'openLoginForm') {
          $userController=new UserController();
          $userController->openLoginForm();
        }
        
        if ($_GET['action'] =='openCheckInForm') {
          $userController=new UserController();
          $userController->openCheckInForm();  
        }
        
        if ($_GET['action'] =='sendMail') {
          $userController=new UserController();
          $userController->sendMail();  
        }
        
        if ($_GET['action'] =='logOut') {
          $userController=new UserController();
          $userController->logOut();  
        }
        
        if ($_GET['action'] =='manageAccount') {
          $userController=new UserController();
          $userController->manageAccount();  
        }
        
        if ($_GET['action'] =='confirmAccount') {
          $userController=new UserController();
          $userController->confirmAccount();  
        }
        
        if ($_GET['action'] =='rejectAccount') {
          $userController=new UserController();
          $userController->rejectAccount();  
        }
        
        //Profile
         if ($_GET['action'] =='listAllProfile') {
          $profileController=new ProfileController();
          $profileController->listAllProfile();  
        }
        
        if ($_GET['action'] =='openNewProfileForm') {
          $profileController=new ProfileController();
          $profileController->openNewProfileForm();  
        }
        
        if ($_GET['action'] =='addProfile') {
          $profileController=new ProfileController();
          $profileController->addProfile();  
        }
        
        if ($_GET['action'] =='addProfileRights') {
          $profileRightsController=new ProfileRightsController();
          $profileRightsController->addProfileRights();  
        }
        
        if ($_GET['action'] =='showProfileRights') {
          $profileRightsController=new ProfileRightsController();
          $profileRightsController->showProfileRights();  
        }
        
        if ($_GET['action'] =='modifyProfileRights') {
          $profileRightsController=new ProfileRightsController();
          $profileRightsController->modifyProfileRights();  
        }
        
        if ($_GET['action'] =='openEraseProfileForm') {
          $profileRightsController=new ProfileRightsController();
          $profileRightsController->openEraseProfileForm();  
        }
        
         if ($_GET['action'] =='eraseProfileRights') {
          $profileRightsController=new ProfileRightsController();
          $profileRightsController->eraseProfileRights();  
        }
        
        //Rights
        
        
        if ($_GET['action'] =='setRights') {
          $rightsController=new RightsController();
          $rightsController->setRights();  
        }
        
        //Pages
        if ($_GET['action'] =='openPageEditor') {
          $pagesController=new PagesController();
          $pagesController->openPageEditor();  
        }
        
        if ($_GET['action'] == 'feedImagePost') {
          $postController=new PostController();
          $postController->feedImagePost();
        }
        
        
        if ($_GET['action'] == 'getPage') {
          $pagesController=new PagesController();
          $pagesController->getPage();
        }
        
        if ($_GET['action'] == 'addContentToPage') {
          $pagesController=new PagesController();
          $pagesController->addContentToPage();
        }
    }
    
    else {
        $newsController=new NewsController();
        $newsController->readNews();
    }
}
    
catch(Exception $e) { // S'il y a eu une erreur, alors...

   $errorMessage = $e->getMessage();
   $smarty->display("view/error.tpl");

}
