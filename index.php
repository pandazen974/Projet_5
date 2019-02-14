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
            $userController=new UserController();
            $userController->registerUsersProfile();
        }
        
        if ($_GET['action'] == 'registerUsersGroup') {
            $userController=new UserController();
            $userController->registerUsersGroup();
        }
        
        if ($_GET['action'] == 'classForm') {
          require_once('view/classesFormView.php');
        } 
        
        if ($_GET['action'] == 'setClass') {
          $classesController=new ClassesController();
            $classesController->setClass();
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
