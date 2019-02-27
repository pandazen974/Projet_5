<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>{block name=titre}{/block}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/Projet_5/public/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="/Projet_5/public/css/jquery.datetimepicker.css"/>
        <link rel='stylesheet' href='/Projet_5/public/css/fullcalendar.css' />
    </head>
 
<body>
<header>

<div id="entete">
    <a href="http://www.lyc-honore-d-estienne-d-orves.ac-nice.fr/"><img src="public/images/logo.png" alt="Logo lycée Honoré Estienne d'Orves"></a>
	<div id="separation">
			<img src="public/images/dts.png" alt="Logo dts">
	</div>
</div>
		<div id="menu">
                    <ul>
                        <li><a href="view/home.tpl">Accueil</a></li>
                        <li><a href="">A propos du DTS</a>
                                <ul class="liste" >
                                <li><a href="index.php?action=userForm">Organigramme</a></li>
                                <li><a href="index.php?UserForm.php">Historique</a></li>
                                <li><a href="index.php?UserForm.php">Débouchés</a></li>
                                <li><a href="index.php?UserForm.php">Modalités d'inscription</a></li>
                      
                            </ul>
                        </li>
                        <li><a href="">A propos du métier</a>
                            <ul class="liste" >
                                <li><a href="index.php?action=userForm">Législation</a></li>
                                <li><a href="index.php?UserForm.php">Modalités</a></li>
                            </ul>
                        </li>
                        <li><a href="">Liens utiles</a>
                            <ul class="liste" >
                                <li><a href="index.php?action=userForm">Jobs</a></li>
                                <li><a href="index.php?UserForm.php">Nous contacter</a></li>
                            </ul>
                        </li>
                        <li><a href="">Administration</a>
                            <ul class="liste" >
                                <li><a href="index.php?action=listAllUsers">Gestion des utilisateurs</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?action=readEvents">Gestion EDT</a>
                            <ul class="liste">
                                <li><a href="index.php?action=openPlanningForm">Plannifier un cours</a></li>
                                <li><a href="index.php?UserForm.php">Modifier un cours</a></li>
                                
                            </ul>
                        </li>
                    </ul>
		</div>

</header>
    
    <div>{block name=contenu}Cette page ne contient rien{/block}</div>
    </body>
</html>