<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:43:32
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\userUpdateForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc745d49acc34_42657378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7801152addfbf96d986b04b5d954cd7b5fe92c36' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\userUpdateForm.tpl',
      1 => 1556562526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc745d49acc34_42657378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19124371305cc745d494ca88_03175407', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_993503725cc745d4958683_30076106', 'contenu');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_19124371305cc745d494ca88_03175407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_19124371305cc745d494ca88_03175407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mise à jour utilisateur<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_993503725cc745d4958683_30076106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_993503725cc745d4958683_30076106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<form action="index.php?action=modifyUser&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id();?>
" method="post">
    <h3>Mise à jour utilisateur</h3>

    <label for="lastName">Nom:</label><br/>
    <input type="text" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->lastName();?>
" />
    
    <label for="firstName">Prénom:</label><br/>
    <input type="text" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->firstName();?>
" />
    
    <label for="middleName">Autres prénoms:</label><br/>
    <input type="text" name="middleName" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->middleName();?>
" />
    
    <label for="address">Adresse:</label><br/>
    <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->address();?>
" />
    
    <label for="city">Ville:</label><br/>
    <input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->city();?>
" />
    
    <label for="postalCode">Code postal:</label><br/>
    <input type="text" name="postalCode" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->postalCode();?>
"  />
    
    <label for="telNumber">Téléphone:</label><br/>
    <input type="tel" name="telNumber" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->telNumber();?>
" />
    
    <label for="birth">Date de Naissance:</label><br/>
    <input type="date" name="birth" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->birth();?>
" />
    
    <label for="email">Email:</label><br/>
    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email();?>
"/>
    
    <label for="registrationDate">Date d'inscription:</label><br/>
    <input type="date" name="registrationDate" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->registrationDate();?>
"/>
    
    <input type="submit" class="form_button" value="Valider" />

</form>
<?php
}
}
/* {/block 'contenu'} */
}
