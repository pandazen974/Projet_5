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
                $newPlanning=new Planning(['title'=>$_POST['title']."\n". $_POST['teacher'],'start'=>$_POST['start'],'end'=>$_POST['end'],'userId'=>$_POST['userId']]);
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
    
}
