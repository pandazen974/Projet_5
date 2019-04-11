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
        <link rel="stylesheet" type="text/css" href="/Projet_5/public/css/jquery.datetimepicker.css"/>
        <link rel='stylesheet' href='/Projet_5/public/css/jquery-ui.css' />
        <link rel='stylesheet' href='/Projet_5/public/css/fullcalendar.css' />
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
		<div class="nav">
                    <a href="index.php?action=readNews" class="title-menu home">Accueil</a>
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
                        
                        <div class="dropdown">
                            <button class="dropbtn">Liens utiles<i class="fas fa-angle-down"></i></button>
                           <div class='dropdown-content'>
                                <a href="index.php?action=userForm">Jobs</a></li>
                                <a href="index.php?UserForm.php">Nous contacter</a></li>
                            </div>
                        </div>
                        {if ((!empty($smarty.session.user)) AND ($smarty.session.user==='Admin'))}
                        <div class="dropdown">
                            <button class="dropbtn">Administration<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                           <a href="index.php?action=openNewProfileForm">Création d'un profil</a>
                            <a href="index.php?action=listAllUsers">Gestion des utilisateurs</a>
                            <a href="index.php?action=openNewsForm">Création des articles</a>
                            <a href="index.php?action=manageAccount">Gestion des comptes utilisateurs</a>
                            </div>
                        </div>
                        {/if}
                        
                        {if ((!empty($smarty.session.user)) AND (($smarty.session.user==='Admin') OR ($smarty.session.user==='Enseignant')))}
                        <div class="dropdown">
                            <button class="dropbtn">Gestion EDT<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                <a href="index.php?action=readEvents">Emploi du temps</a>
                                <a href="index.php?action=openPlanningForm">Plannifier un cours</a>       
                            </div>
                        </div>
                        {/if}
                        
                        
                        <div class="dropdown">
                            <button class="dropbtn">Connexion<i class="fas fa-angle-down"></i></button>
                            <div class='dropdown-content'>
                                {if (!empty($smarty.session.user))}<a href="index.php?action=logOut">Se déconnecter</a>
                                {else}<a href="index.php?action=openLoginForm">Identification</a> {/if}
                             
                               
                            </div>
                        </div>
                        
                            
                       
		</div>

</header>
    <div class="user">
                            {if (empty($smarty.session.user))} <p>Visiteur</p>{else}
                                <p>Statut: {$smarty.session.user}</p>{/if}
                            
                        </div>
                                   
    <div>{block name=contenu}{/block}</div>
    {block name=scripts}{/block}
    </body>
    
</html>