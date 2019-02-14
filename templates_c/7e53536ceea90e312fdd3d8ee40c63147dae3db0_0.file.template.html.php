<?php
/* Smarty version 3.1.33, created on 2019-02-05 09:33:52
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\template.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5958800e63a4_07515131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e53536ceea90e312fdd3d8ee40c63147dae3db0' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\template.html',
      1 => 1549359021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5958800e63a4_07515131 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
    <link href="/Projet_5/public/css/style.css" rel="stylesheet" />
    <title>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    </title>
    
    
</head>

<body>
<header>

<div id="entete">
	<img src="public/images/logo.png" alt="Logo lycée Honoré Estienne d'Orves">
	<div id="separation">
			<h1>DTS Imagerie Médicale et<br/> Radiologie thérapeutique</h1>
	</div>
</div>
		<div id="menu">
                    <ul>
                        <li><a href="">Accueil</a></li>
                        <li><a href="">La formation</a></li>
                        <li><a href="">Le métier</a></li>
                        <li><a href="">Contacts</a></li>
                        <li><a href="">Administration</a>
                            <ul id="liste_2" >
                                <li><a href="index.php?action=userForm">Enregistrement</a></li>
                                <li><a href="index.php?UserForm.php">Lister personnes</a></li>
                                <li><a href="index.php?UserForm.php">Mise à jour</a></li>
                                <li><a href="index.php?UserForm.php">Suppression</a></li>
                      
                            </ul>
                        </li>
                        <li><a href="">Gestion cours</a>
                            <ul id="liste_3" >
                                <li><a href="index.php?action=classForm">Ajouter un cours</a></li>
                                <li><a href="index.php?UserForm.php">Lister cours</a></li>
                                <li><a href="index.php?UserForm.php">Changer un cours</a></li>
                                <li><a href="index.php?UserForm.php">Supprimer un cours</a></li>
                            </ul>
                        </li>
                    </ul>
		</div>

</header>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>

</html>
<?php }
}
