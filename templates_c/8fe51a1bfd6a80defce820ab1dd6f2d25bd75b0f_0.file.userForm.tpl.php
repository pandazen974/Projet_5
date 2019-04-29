<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:36:10
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\userForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc7441a7cf9b0_22336621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe51a1bfd6a80defce820ab1dd6f2d25bd75b0f' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\userForm.tpl',
      1 => 1556562470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc7441a7cf9b0_22336621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2587753005cc7441a7c4cb3_29041001', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7350003855cc7441a7c9e18_76700685', 'contenu');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_2587753005cc7441a7c4cb3_29041001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_2587753005cc7441a7c4cb3_29041001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Enregistrement<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_7350003855cc7441a7c9e18_76700685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_7350003855cc7441a7c9e18_76700685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<form action="index.php?action=registerUser" method="post">
<h3>Enregistrer utilisateur</h3>

    <label for="lastName">Nom:</label><br/>
    <input type="text" name="lastName" />
    
    <label for="firstName">Prénom:</label><br/>
    <input type="text" name="firstName" />
    
    <label for="middleName">Autres prénoms:</label><br/>
    <input type="text" name="middleName" />
    
    <label for="address">Adresse:</label><br/>
    <input type="text" name="address" />
    
    <label for="city">Ville:</label><br/>
    <input type="text" name="city" />
    
    <label for="postalCode">Code postal:</label><br/>
    <input type="text" name="postalCode" />
    
    <label for="telNumber">Téléphone:</label><br/>
    <input type="tel" name="telNumber" />
    
    <label for="birth">Date de Naissance:</label><br/>
    <input type="date" name="birth" />
    
    <label for="email">Email:</label><br/>
    <input type="email" name="email"/>
    
    <label for="registrationDate">Date d'inscription:</label><br/>
    <input type="date" name="registrationDate"/>
    
    <input type="submit" class="form_button" value="Valider" />
    
</form>
<?php
}
}
/* {/block 'contenu'} */
}
