<?php
/* Smarty version 3.1.33, created on 2019-02-04 13:45:20
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\userFormView.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5841f03dfd20_21232801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51144a32444a5db61f83d66462872ab00a8a1ab7' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\userFormView.php',
      1 => 1549107814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5841f03dfd20_21232801 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php ';?>$title = 'Inscription'; <?php echo '?>';?>

<?php echo '<?php ';?>ob_start(); <?php echo '?>';?>
<form action="index.php?action=registerUser" method="post">


    <label for="lastName">Nom:</label><br/>
    <input type="text" name="lastName" />
    
    <label for="firstName">Prénom:</label><br/>
    <input type="text" name="firstName" />
    
    <label for="middleName">Autres prénoms:</label><br/>
    <input type="text" name="middleName" />
    
    <label for="address">Adresse:</label><br/>
    <input type="text" name="address" />
    
    <label for="telNumber">Téléphone:</label><br/>
    <input type="tel" name="telNumber" />
    
    <label for="birth">Date de Naissance:</label><br/>
    <input type="date" name="birth" />
    
    <label for="email">Email:</label><br/>
    <input type="email" name="email"/>
    
    <label for="registrationDate">Date d'inscription:</label><br/>
    <input type="date" name="registrationDate"/>
    
    <input type="submit" value="Valider" />



</form>

<?php echo '<?php ';?>$content = ob_get_clean(); <?php echo '?>';?>

<?php echo '<?php ';?>require("template.php"); <?php }
}
