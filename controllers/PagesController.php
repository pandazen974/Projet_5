<?php
class PagesController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function openPageEditor(){
        $pagesManager=new PagesManager;
        $pages=$pagesManager->readAllPages();
        $this->smarty->assign('pages',$pages);
        $this->smarty->display('view/editPage.tpl');
    }
    
  
    public function addContentToPage(){
        $pagesManager=new PagesManager;
        $pages=new Pages(['id'=>$_POST['pageId'],'content'=>$_POST['content']]);
        $pagesManager->updatePage($pages);
        $selectedPage=$pagesManager->readPageWithId($_POST['pageId']);
        $this->smarty->assign('selectedPage',$selectedPage);
        $this->smarty->display('view/selectedPage.tpl');
    }
    
  
    public function getPage(){
        $pagesManager=new PagesManager;
        $selectedPage='';
        if (isset($_POST['selectedPage'])){
        $selectedPage=$_POST['selectedPage'];
        }
        $activePage=$pagesManager->readPageWithId($selectedPage);
        $jpage=$activePage->content();
        $this->smarty->assign('jpage',$jpage);
        $this->smarty->display('view/page.tpl');
   
    }
    
    public function guessPage(){
       $pagesManager=new PagesManager;
       $selectedPage=$pagesManager->readPageWithId($_GET['id']);
       $this->smarty->assign('selectedPage',$selectedPage);
       $this->smarty->display('view/selectedPage.tpl');
    }
}