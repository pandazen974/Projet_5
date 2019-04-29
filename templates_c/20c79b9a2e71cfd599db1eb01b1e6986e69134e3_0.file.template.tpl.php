<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:04:09
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc73c9992ff26_98183577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20c79b9a2e71cfd599db1eb01b1e6986e69134e3' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\template.tpl',
      1 => 1556561046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc73c9992ff26_98183577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7990906435cc73c99688b30_76422913', 'titre');
?>
</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Bienvenue sur le site de la formation DTS Imagerie Médicale et Radiologie Thérapeutique de Nice" />
        <meta property="og:title" content="DTS Imagerie Médicale et Radiologie Thérapeutique de Nice" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.pandazen.net/Projet_5/" />
        <meta property="og:image" content="http://www.pandazen.net/Projet_5/public/images/dts.png" />
        <meta property="og:description" content="Bienvenue sur le site de la formation DTS Imagerie Médicale et Radiologie Thérapeutique de Nice" />
        <meta name="twitter:card" content="DTS Imagerie Médicale et Radiologie Thérapeutique de Nice">
        <meta name="twitter:site" content="https://twitter.com/bdeestienne">
        <meta name="twitter:title" content="DTS Imagerie Médicale et Radiologie Thérapeutique de Nice">
        <meta name="twitter:description" content="Bienvenue sur le site de la formation DTS Imagerie Médicale et Radiologie Thérapeutique de Nice"/>
        <meta name="twitter:creator" content="@Kevin_Ahpine">
        <meta name="twitter:image:src" content="http://www.pandazen.net/Projet_5/public/images/dts.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/Projet_5/public/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="/Projet_5/public/css/jquery.datetimepicker.css"/>
        <link rel='stylesheet' href='/Projet_5/public/css/jquery-ui.css' />
        <link rel='stylesheet' href='/Projet_5/public/css/fullcalendar.css' />
        <link rel="icon" type="image/ico" href='/Projet_5/public/css/images/favicon.png' />
        <link rel="shortcut icon" type="image/x-icon" href='/Projet_5/public/css/images/favicon.png' />
        <link href="https://fonts.googleapis.com/css?family=Signika+Negative" rel="stylesheet"> 
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js"><?php echo '</script'; ?>
>
       
    </head>
 
<body>
<header>

<div id="entete">
    <a href="http://www.lyc-honore-d-estienne-d-orves.ac-nice.fr/"><img src="public/css/images/lycee.png" alt="Logo lycée Honoré Estienne d'Orves"></a>
	<div id="separation">
			<img src="public/css/images/dts.png" alt="Logo dts">
	</div>
</div>
		<div class="nav" id="topnav">
                    <a href="index.php?action=readNews" class="title-menu home"><i class="fas fa-home"></i>Accueil</a>
                        <div class="dropdown">
                            <button class="dropbtn">A propos du DTS<i class="fas fa-angle-down"></i></span></button>
                            <div class='dropdown-content'>
                                    <a href="index.php?action=guessPage&amp;id=1">Organigramme</a>
                                    <a href="index.php?action=guessPage&amp;id=2">Historique</a>
                                    <a href="index.php?action=guessPage&amp;id=3">Débouchés</a>
                                    <a href="index.php?action=guessPage&amp;id=4">Modalités d'inscription</a>
                      
                            </div>
                        </div>
                       
                        <div class="dropdown">
                            <button class="dropbtn">A propos du métier<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                 <a href="index.php?action=guessPage&amp;id=5">Législation</a>  
                                 <a href="index.php?action=guessPage&amp;id=7">Modalités</a>
                            </div>
                        </div>
                        
                        
                        <?php if ((!empty($_SESSION['user']))) {?>
                        <?php if (in_array(10,$_SESSION['user'])) {?>
                        <div class="dropdown">
                            <button class="dropbtn">Gestion Profils<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                <?php if (in_array(9,$_SESSION['user'])) {?><a href="index.php?action=openNewProfileForm">Création d'un profil</a><?php }?>
                                <?php if (in_array(11,$_SESSION['user'])) {?><a href="index.php?action=listAllProfile">Mise à jour profil</a><?php }?>
                                <?php if (in_array(12,$_SESSION['user'])) {?><a href="index.php?action=openEraseProfileForm">Suppression profil</a><?php }?>
                            </div>
                        </div>
                        <?php }?> 
                        <?php }?>
                        
                        <div class="dropdown">
                            <button class="dropbtn">Liens utiles<i class="fas fa-angle-down"></i></button>
                           <div class='dropdown-content'>
                                 <a href="index.php?action=guessPage&amp;id=6">Jobs</a>
                                <a href="index.php?action=openContactForm">Nous contacter</a>
                            </div>
                        </div>
                        
                        
                        <div class="dropdown">
                            <button class="dropbtn">Connexion<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                <?php if ((!empty($_SESSION['user']))) {?><a href="index.php?action=logOut">Se déconnecter</a>
                                <?php } else { ?><a href="index.php?action=openLoginForm">Identification</a> <?php }?>
                             
                               
                            </div>
                        </div>
                        <a href="javascript:void(0);" onclick="myFunction()" class="icon" >&#9776</a>
                            
                       
		</div>

</header>
                                
<div id="menu-container">
    <div id="bar"><span id="arrow-right" class="arrow fas fa-caret-square-right"></span><span id="arrow-left" class=" arrow fas fa-caret-square-left"></span></div>                            
    <div class="user">
        <?php if ((empty($_SESSION['user']))) {?><div class="user-menu normal"><i class="fas fa-user"></i>Visiteur</div><?php } else { ?>
            <div class="user-menu first-option" ><i class="fas fa-user"></i><span id="status" class="ialign"><?php echo $_SESSION['profile'];?>
</span></div>
        <?php if ((!empty($_SESSION['group']))) {?><div class="user_menu normal first-option" <?php if (($_SESSION['group']) == 1) {?> style="color:rgba(219, 10, 91, 1)"<?php } elseif (($_SESSION['group']) == 2) {?>style="color:rgba(77, 5, 232, 1)"<?php } else { ?> style="color:rgba(240, 255, 0, 1)"<?php }?>><i class="fas fa-users"></i>Groupe<span id="group" class="ialign"><?php echo $_SESSION['group'];?>
</span></div><?php }?>
        <?php if ((!is_null($_SESSION['user'])) && in_array(6,$_SESSION['user'])) {?> <div class="user-menu"><a href="index.php?action=readEvents"><i class="far fa-calendar-alt"></i>EDT</a></div><?php }?>
        <?php if ((!is_null($_SESSION['user'])) && in_array(14,$_SESSION['user'])) {?><div class="user-menu"><a href="index.php?action=listAllUsers"><i class="fas fa-id-card"></i>Gestion</a></div><?php }?>
        <?php if ((!is_null($_SESSION['user'])) && in_array(14,$_SESSION['user'])) {?><div class="user-menu"><a href="index.php?action=manageAccount"><i class="fas fa-user-check"></i>Vérification</a></div><?php }?>
        <?php if ((!is_null($_SESSION['user'])) && in_array(17,$_SESSION['user'])) {?><div class="user-menu"><a href="index.php?action=openPageEditor"><i class="fas fa-edit"></i>Editer page</a></div><?php }?>
        <?php if ((!is_null($_SESSION['user'])) && in_array(1,$_SESSION['user'])) {?><div class="user-menu"><a href="index.php?action=openNewsForm"><i class="far fa-newspaper"></i>Actualités</a></div><?php }?>
        <?php }?>   
    </div>
</div>                            
                        
                                   
    <div class="page-container"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6422734365cc73c999156a2_84915880', 'contenu');
?>
</div>
    
    <footer>
        <div id="footer-logo" class="footer-content">
            <img src="public/css/images/nice.png" alt="Logo académie de Nice">
            <div id="footer-address">
                    <h1>DTS IMRT NICE</h1>
                    <p>LYCEE HONORED’ESTIENNE D’ORVES Rive gauche <br/> DTS IMRT38,  Avenue  d’Estienne  d’Orves<br/> 06050 NICE CEDEX <br>104  93  97  70  90</p>
                    <div class="social-footer">
                        <a href="https://www.facebook.com/pages/Lyc%C3%A9e-Honor%C3%A9-dEstienne-dOrves/106501442718365"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/bdeestienne"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCF7gKjncBFE2QNqNZbZNQJQ"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/explore/locations/458052446/lycee-honore-destienne-dorves-beau-site"><i class="fab fa-instagram"></i></a>
                    </div>
            </div>
            </div>
        
    </footer>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10008953165cc73c99923c38_86598994', 'scripts');
?>
              
    <?php echo '<script'; ?>
 src='/Projet_5/public/js/quickmenu.js'><?php echo '</script'; ?>
>            
    <?php echo '<script'; ?>
>
    function myFunction() {
    var x = document.getElementById("topnav");
    if (x.className === "nav") {
    x.className += " responsive";
    } else {
    x.className = "nav";
    }
    }
    <?php echo '</script'; ?>
>

    </body>
    
</html><?php }
/* {block 'titre'} */
class Block_7990906435cc73c99688b30_76422913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_7990906435cc73c99688b30_76422913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_6422734365cc73c999156a2_84915880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_6422734365cc73c999156a2_84915880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_10008953165cc73c99923c38_86598994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_10008953165cc73c99923c38_86598994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
