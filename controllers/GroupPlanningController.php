<?php

class GroupPlanningController extends Controller{
    
public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
}

public function registerGroupPlanning(){
    $groupPlanningManager=new GroupPlanningManager();
    
                $groupPlanning=new GroupPlanning(['groupId'=>$_POST['groupName'],'planningId'=>$_POST['planningId']]);
                $newGroupPlanning=$groupPlanningManager->setGroupPlanning($groupPlanning);
                $this->smarty->assign('newGroupPlanning', $newGroupPlanning);
                $planningManager=new PlanningManager();
                $planning=$planningManager->readPlanning();
                $this->smarty->assign('planning', $planning);
                $this->smarty->display('view/calendar.tpl');
                
}

}