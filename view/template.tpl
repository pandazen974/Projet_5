<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>{block name=titre}{/block}</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/Projet_5/public/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="/Projet_5/public/css/jquery.datetimepicker.css"/>
        <link rel='stylesheet' href='/Projet_5/public/css/jquery-ui.css' />
        <link rel='stylesheet' href='/Projet_5/public/css/fullcalendar.css' />
        <link rel="icon" type="image/ico" href='/Projet_5/public/css/images/favicon.ico' />
        <link rel="shortcut icon" type="image/x-icon" href='/Projet_5/public/css/images/favicon.png' />
        <link href="https://fonts.googleapis.com/css?family=Signika+Negative" rel="stylesheet"> 
        <script src="https://www.google.com/recaptcha/api.js"></script>
       
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
                                    <a href="index.php?action=userForm">Organigramme</a>
                                    <a href="index.php?UserForm.php">Historique</a>
                                    <a href="index.php?UserForm.php">Débouchés</a>
                                    <a href="index.php?UserForm.php">Modalités d'inscription</a>
                      
                            </div>
                        </div>
                       
                        <div class="dropdown">
                            <button class="dropbtn">A propos du métier<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                <a href="index.php?action=userForm">Législation</a>  
                                <a href="index.php?UserForm.php">Modalités</a>
                            </div>
                        </div>
                        
                        
                        {if (!empty($smarty.session.user))}
                            {if in_array(14,$smarty.session.user)}
                        <div class="dropdown">
                            <button class="dropbtn">Administration<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                            {if in_array(1,$smarty.session.user)}<a href="index.php?action=openNewsForm">Création des articles</a>{/if}
                            {if in_array(14,$smarty.session.user)}<a href="index.php?action=manageAccount">Gestion des comptes utilisateurs</a>{/if}
                            {if in_array(17,$smarty.session.user)}<a href="index.php?action=openPageEditor">Editer une page</a>{/if}
                            </div>
                        </div>
                            {/if}
                        
                        {if in_array(10,$smarty.session.user)}
                        <div class="dropdown">
                            <button class="dropbtn">Gestion Profils<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                {if in_array(9,$smarty.session.user)}<a href="index.php?action=openNewProfileForm">Création d'un profil</a>{/if}
                                {if in_array(11,$smarty.session.user)}<a href="index.php?action=listAllProfile">Mise à jour profil</a>{/if}
                                {if in_array(12,$smarty.session.user)}<a href="index.php?action=openEraseProfileForm">Suppression profil</a>{/if}
                            </div>
                        </div>
                        {/if}
                        
                         
                        {/if}
                        
                        <div class="dropdown">
                            <button class="dropbtn">Liens utiles<i class="fas fa-angle-down"></i></button>
                           <div class='dropdown-content'>
                                <a href="index.php?action=userForm">Jobs</a></li>
                                <a href="index.php?UserForm.php">Nous contacter</a></li>
                            </div>
                        </div>
                        
                        
                        <div class="dropdown">
                            <button class="dropbtn">Connexion<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                {if (!empty($smarty.session.user))}<a href="index.php?action=logOut">Se déconnecter</a>
                                {else}<a href="index.php?action=openLoginForm">Identification</a> {/if}
                             
                               
                            </div>
                        </div>
                        <a href="javascript:void(0);" onclick="myFunction()" class="icon" >&#9776</a>
                            
                       
		</div>

</header>
                                
    <div class="user">
        {if (empty($smarty.session.user))}<div class="user-menu normal"><i class="fas fa-user"></i>Visiteur</div>{else}
            <div class="user-menu first-option" ><i class="fas fa-user"></i><span id="status" class="ialign">{$smarty.session.profile}</span></div>
            {if (!empty($smarty.session.group))}<div class="user_menu normal first-option" {if ($smarty.session.group)==1} style="color:rgba(219, 10, 91, 1)"{elseif ($smarty.session.group)==2}style="color:rgba(77, 5, 232, 1)"{else} style="color:rgba(240, 255, 0, 1)"{/if}><i class="fas fa-users"></i>Groupe<span id="group" class="ialign">{$smarty.session.group}</span></div>{/if}
        {if (!is_null($smarty.session.user)) AND in_array(6,$smarty.session.user)} <div class="user-menu"><a href="index.php?action=readEvents"><i class="far fa-calendar-alt"></i>EDT</a></div>{/if}
        {if (!is_null($smarty.session.user)) AND in_array(14,$smarty.session.user)}<div class="user-menu"><a href="index.php?action=listAllUsers"><i class="fas fa-id-card"></i>Gestion</a></div>{/if}
        {if (!is_null($smarty.session.user)) AND in_array(14,$smarty.session.user)}<div class="user-menu"><a href="index.php?action=manageAccount"><i class="fas fa-user-check"></i>Vérification</a></div>{/if}
        {if (!is_null($smarty.session.user)) AND in_array(17,$smarty.session.user)}<div class="user-menu"><a href="index.php?action=openPageEditor"><i class="fas fa-edit"></i>Editer page</a></div>{/if}
        {if (!is_null($smarty.session.user)) AND in_array(1,$smarty.session.user)}<div class="user-menu"><a href="index.php?action=openNewsForm"><i class="far fa-newspaper"></i>Actualités</a></div>{/if}
        {/if}   
    </div>
                            
                        
                                   
    <div class="page-container">{block name=contenu}{/block}</div>
    
    <footer>
        <div class="footer content"></div>
        <div class="footer-content"><h2>DTS IMAGERIE MEDICALE ET RADIOLOGIE THERAPEUTIQUE</h2></div>
        <div class="footer-content"></div>
    </footer>
 
    {block name=scripts}{/block}
                            
                            
    <script>
function myFunction() {
  var x = document.getElementById("topnav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}
</script>

    </body>
    
</html>