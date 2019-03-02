<?php
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

try { // Cherche la page
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'openUserForm') {
          $smarty->display('view/userForm.tpl');
        }
        
        if ($_GET['action'] == 'openUserUpdateForm') {
          $userController=new UserController();
          $userController->openUserUpdateForm();
        }
        
        if ($_GET['action'] == 'openPlanningForm') {
          $classesController=new ClassesController();
          $classesController->listAllclasses();
        }
        
        if ($_GET['action'] == 'readEvents') {
          $planningController=new PlanningController();
          $planningController->readEvents();
        }
        
        if ($_GET['action'] == 'feedEvents') {
          $planningController=new PlanningController();
          $planningController->feedEvents();
        }
        
        if ($_GET['action'] == 'addEvent') {
          $planningController=new PlanningController();
          $planningController->addEvent();
        }

        if ($_GET['action'] == 'listAllUsers') {
          $userController=new UserController();
          $userController->listAllUsers();
        } 
//      
        if ($_GET['action'] == 'registerUser') {
            $userController=new UserController();
            $userController->registerUser();
        }
        
        if ($_GET['action'] == 'modifyUser') {
            $userController=new UserController();
            $userController->modifyUser();
        }
        
         if ($_GET['action'] == 'eraseUser') {
            $userController=new UserController();
            $userController->eraseUser();
        }
        
        if ($_GET['action'] == 'registerUsersProfile') {
            $usersProfileController=new UsersProfileController();
            $usersProfileController->registerUsersProfile();
        }
        
        if ($_GET['action'] == 'registerStudentsGroup') {
            $studentsGroupController=new StudentsGroupController();
            $studentsGroupController->registerStudentsGroup();
        }
        
        if ($_GET['action'] == 'registerGroupPlanning') {
            $groupPlanningController=new GroupPlanningController();
            $groupPlanningController->registerGroupPlanning();
        }
           
    }
    
    else {
        $smarty->display("view/home.tpl");
    }
}
    
catch(Exception $e) { // S'il y a eu une erreur, alors...

   $errorMessage = $e->getMessage();
   $smarty->display("view/error.tpl");

}
