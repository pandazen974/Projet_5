<?php

class PlanningController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
        public function readEvents(){
        $this->smarty->display('view/calendar.tpl');
                
    }
    
    public function feedGroupOneEvents(){
        $groupPlanningManager=new GroupPlanningManager();
        $planningOne=$groupPlanningManager->readPlanningOne();
        $this->smarty->assign('planningOne', $planningOne); 
        $this->smarty->display('view/groupOne.tpl');
    }
    
     public function feedGroupTwoEvents(){
        $groupPlanningManager=new GroupPlanningManager();
        $planningTwo=$groupPlanningManager->readPlanningTwo();
        $this->smarty->assign('planningTwo', $planningTwo); 
        $this->smarty->display('view/groupTwo.tpl');
    }
    
     public function feedGroupthreeEvents(){
        $groupPlanningManager=new GroupPlanningManager();
        $planningThree=$groupPlanningManager->readPlanningThree();
        $this->smarty->assign('planningThree', $planningThree); 
        $this->smarty->display('view/groupThree.tpl');
    }
    
    public function addEvent(){
        $planningManager=new PlanningManager();
            if(!empty($_POST['title']) AND !empty($_POST['start']) AND !empty($_POST['end']) ){
                $start=date('Y-m-d H:i:s', strtotime($_POST['start']));
                $end=date('Y-m-d H:i:s', strtotime($_POST['end']));
                $newPlanning=new Planning(['title'=>$_POST['title']."\n". $_POST['teacher'],'start'=>$start,'end'=>$end]);
                var_dump($newPlanning);
                $planningManager->createPlanning($newPlanning);
                $this->smarty->assign('newPlanning', $newPlanning);
                $groupManager=new GroupManager();  
                $groups=$groupManager->readAllGroups();
                $this->smarty->assign('groups', $groups);
                $this->smarty->display('view/groupPlanningForm.tpl');           
            }else{
                $this->smarty->display('view/planningForm.tpl');
            }
    
    }
    
    public function openUpdatePlanningForm(){
        $planningManager=new PlanningManager();
        $planning=$planningManager->readSelectedPlanning($_GET['id']);
        var_dump($planning);
        $planning->setStart(date('d-m-Y H:i:s', strtotime($planning->start())));
        $planning->setEnd(date('d-m-Y H:i:s', strtotime($planning->end())));
        date('Y-m-d H:i:s', strtotime($planning->start()));
        $this->smarty->assign('planning', $planning);
        $classesManager=new ClassesManager();
        $classes=$classesManager->readAllClasses();
        $this->smarty->assign('classes', $classes);
        $userManager=new UserManager();
        $teachers=$userManager->readTeachersOnly();
        $this->smarty->assign('teachers', $teachers);
        $groupManager=new GroupManager();
        $groups=$groupManager->readAllGroups();
        $this->smarty->assign('groups', $groups);
        $this->smarty->display('view/updatePlanningForm.tpl');
        
    }
    
    public function modifyPlanning(){
        $groupManager=new GroupManager();
        $groups=$groupManager->readAllGroups();
        $this->smarty->assign('groups', $groups);
        //suppression de la relation groupe/Planning
        $groupPlanningManager=new GroupPlanningManager();
        $groupPlanning=$groupPlanningManager->readSelectedGroupPlanning($_GET['id']);
        $groupPlanningManager->deleteGroupPlanning($groupPlanning);
        //suppression du Planning concerné
        $planningManager=new PlanningManager();
        $planning=$planningManager->readSelectedPlanning($_GET['id']);
        $planningManager->deletePlanning($planning);
        //création d'un nouveau planning
        $start=date('Y-m-d H:i:s', strtotime($_POST['start']));
        $end=date('Y-m-d H:i:s', strtotime($_POST['end']));
        $newPlanning=new Planning(['title'=>$_POST['title']."\n". $_POST['teacher'],'start'=>$start,'end'=>$end]);
        $planningManager->createPlanning($newPlanning);
        var_dump($newPlanning);
        $this->smarty->assign('newPlanning', $newPlanning);
        $this->smarty->display('view/newGroupPlanningForm.tpl');
    }
    
    public function erasePlanning(){
        $groupPlanningManager=new GroupPlanningManager();
        $groupPlanning=$groupPlanningManager->readSelectedGroupPlanning($_GET['id']);
        $groupPlanningManager->deleteGroupPlanning($groupPlanning);
        $planningManager=new PlanningManager();
        $planning=$planningManager->readSelectedPlanning($_GET['id']);
        $planningManager->deletePlanning($planning);
        $this->smarty->assign('planning', $planning);
        $this->smarty->display('view/calendar.tpl');
    }
}
