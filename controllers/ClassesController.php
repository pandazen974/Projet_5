<?php

class ClassesController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
     public function listAllClasses(){
        $classesManager=new ClassesManager();
        $classes=$classesManager->readAllClasses();
        $this->smarty->assign('classes', $classes);
        $userManager=new UserManager();
        $teachers=$userManager->readTeachersOnly();
        $this->smarty->assign('teachers', $teachers);
        $this->smarty->display('view/planningForm.tpl');
    }
    
    public function setClass(){
    $classesManager=new ClassesManager();
    if(!empty($_POST['className'])){
                $classes=new Classes(['className'=>$_POST['className']]);
                $newClass=$classesManager->createOneClass($classes);
                $this->smarty->assign('newClass', $newClass);
                $this->smarty->display('view/planningForm.tpl');
                
                
    }else{
            $this->smarty->display('view/classForm.tpl');
    }
    
    }
    
   
    
}
