<?php

class NewsController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function openNewsForm(){
        $this->smarty->display('view/newsForm.tpl');
    }
    
    public function openUpdateNewsForm(){
        $newsManager=new NewsManager();
        $news=$newsManager->readSelectedNews($_GET['id']);
        $this->smarty->assign('news', $news);
        $this->smarty->display('view/updateNewsForm.tpl');
    }
    
    public function readNews(){
        $newsManager=new NewsManager();
        $page = (!empty($_GET['page']) ? $_GET['page'] : 1);
        $end=3;
        $start = ($page - 1) * $end;
        $allNews=$newsManager->readAllNews($start,$end);
        $num=$newsManager->countAll();
        $totalPages = ceil($num / $end);
        $this->smarty->assign('allNews', $allNews);
        $this->smarty->assign('page', $page);
        $this->smarty->assign('totalPages', $totalPages);
        $this->smarty->display('view/home.tpl');
    }
    
    public function readOneNews(){
        $newsManager=new NewsManager();
        $oneNews=$newsManager->readSelectedNews($_GET['id']);
        $this->smarty->assign('oneNews', $oneNews);
        $this->smarty->display('view/news.tpl');
    }
    
    public function addNews(){
        $newsManager=new NewsManager();
        if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['imageName']) AND !empty($_POST['imageDescription'])){
            if ($_FILES['image']['error'] > 0) {
                $erreur = "Erreur lors du transfert";
            }
            $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
            $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
            if ( in_array($extension_upload,$extensions_valides) ) {echo "Extension correcte";}
            $image_sizes = getimagesize($_FILES['image']['tmp_name']);
            if ($image_sizes[0] > 500 OR $image_sizes[1] > 500) {$erreur = "Image trop grande";}
            $nom = "C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\public\css\images\\{$_POST['imageName']}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
            if ($resultat) {echo "Transfert réussi";}
            $news=new News(['title'=>$_POST['title'],'content'=>$_POST['content'],'imageName'=>$_POST['imageName'],'imageDescription'=>$_POST['imageDescription']]);
            $newsManager->createNews($news);
            $allNews=$newsManager->readAllNews();
            $this->smarty->assign('allNews', $allNews);
            $this->smarty->display('view/home.tpl');
        }
    }
    
    public function modifyNews(){
        $newsManager=new NewsManager();
       if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['imageName']) AND !empty($_POST['imageDescription'])){
            if ($_FILES['image']['error'] > 0) {
                $erreur = "Erreur lors du transfert";
            }
            $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
            $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
            if ( in_array($extension_upload,$extensions_valides) ) {echo "Extension correcte";}
            $image_sizes = getimagesize($_FILES['image']['tmp_name']);
            if ($image_sizes[0] > 500 OR $image_sizes[1] > 500) {$erreur = "Image trop grande";}
            $nom = "C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\public\css\images\\{$_POST['imageName']}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
            if ($resultat) {echo "Transfert réussi";}
            $news=new News(['id'=>$_GET['id'],'title'=>$_POST['title'],'content'=>$_POST['content'],'imageName'=>$_POST['imageName'],'imageDescription'=>$_POST['imageDescription']]);
            $newsManager->updateNews($news);
            header("Location: http://localhost/Projet_5/index.php?");
            $this->smarty->display('view/home.tpl');
    }
    }
    
    public function eraseNews(){
        $newsManager=new NewsManager();
        $news=$newsManager->readSelectedNews($_GET['id']);
        $extensions_valides = array( '.jpg' , '.jpeg' , '.gif' , '.png' );
        foreach ($extensions_valides as $ext) {
            $name=$news->imageName().$ext;
            $filename = "C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\public\css\images\\$name";
            if (file_exists ($filename)){
                unlink($filename);    
            }
        }
        $newsManager->deleteNews($news);
        $allNews=$newsManager->readAllNews();
        $this->smarty->assign('allNews', $allNews);
        $this->smarty->display('view/home.tpl');
    }
}