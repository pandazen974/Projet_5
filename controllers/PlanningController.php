<?php

class PlanningController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
        public function readEvents(){
        $this->smarty->display('view/calendar.tpl');
                
    }
    
    public function feedEvents(){
        $planningManager=new PlanningManager();
        $planning=$planningManager->readPlanning();
        $this->smarty->assign('planning', $planning); 
        $this->smarty->display('view/feed.tpl');
    }
    
    public function addEvent(){
        $planningManager=new PlanningManager();
            if(!empty($_POST['title']) AND !empty($_POST['start']) AND !empty($_POST['end']) ){
                $newPlanning=new Planning(['title'=>$_POST['title']."\n". $_POST['teacher'],'start'=>$_POST['start'],'end'=>$_POST['end']]);
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
        $groupPlanningManager=new GroupPlanningManager();
        $groupPlanning=new GroupPlanning(['groupId'=>$_POST['groupName'],'planningId'=>$_GET['id']]);
        var_dump($groupPlanning);
        $groupPlanningManager->updateGroupPlanning($groupPlanning);
        $planningManager=new PlanningManager();
        $newPlanning=new Planning(['id'=>$_GET['id'],'title'=>$_POST['title']."\n". $_POST['teacher'],'start'=>$_POST['start'],'end'=>$_POST['end']]);
        $planningManager->updatePlanning($newPlanning);
        var_dump($newPlanning);
        $this->smarty->assign('$newPlanning', $newPlanning);
        $this->smarty->display('view/calendar.tpl');
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
