<?php
/* Smarty version 3.1.33, created on 2019-02-12 14:46:55
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\userForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c62dc5f2f8e49_09416756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe51a1bfd6a80defce820ab1dd6f2d25bd75b0f' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\userForm.tpl',
      1 => 1549981976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62dc5f2f8e49_09416756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4976126665c62dc5f2f0a51_58870407', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6139814145c62dc5f2f6024_62984554', 'contenu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_4976126665c62dc5f2f0a51_58870407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_4976126665c62dc5f2f0a51_58870407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Enregistrement<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_6139814145c62dc5f2f6024_62984554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_6139814145c62dc5f2f6024_62984554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Enregistrer utilisateur</h3>*



<form action="index.php?action=registerUser" method="post">


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
    
    <input type="submit" value="Valider" />

</form>
<?php
}
}
/* {/block 'contenu'} */
}
