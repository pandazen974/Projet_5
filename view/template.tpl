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
                        
                        
                        {if (!empty($smarty.session.user))}
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
                                 <a href="index.php?action=guessPage&amp;id=6">Jobs</a>
                                <a href="index.php?action=openContactForm">Nous contacter</a>
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
                                
<div id="menu-container">
    <div id="bar"><span id="arrow-right" class="arrow fas fa-caret-square-right"></span><span id="arrow-left" class=" arrow fas fa-caret-square-left"></span></div>                            
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
</div>                            
                        
                                   
    <div class="page-container">{block name=contenu}{/block}</div>
    
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    {block name=scripts}{/block}              
    <script src='/Projet_5/public/js/quickmenu.js'></script>            
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