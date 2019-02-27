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
                $planning=new Planning(['title'=>$_POST['title'],'start'=>$_POST['start'],'end'=>$_POST['end']]);
                $event=$planningManager->createPlanning($planning);
                $planningManager->readPlanning();
        $this->smarty->assign('planning', $planning);
        $this->smarty->display('view/calendar.tpl');
              

                
                
    }else{
            $this->smarty->display('view/planningForm.tpl');
    }
    
    }
    
}
