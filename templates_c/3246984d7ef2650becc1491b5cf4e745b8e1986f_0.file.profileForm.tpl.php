<?php
/* Smarty version 3.1.33, created on 2019-02-11 09:23:25
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\profileForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c613f0d1a3aa1_51859433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3246984d7ef2650becc1491b5cf4e745b8e1986f' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\profileForm.tpl',
      1 => 1549876939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c613f0d1a3aa1_51859433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20957396155c613f0d09f4d6_95410670', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_701319385c613f0d15c274_47943200', 'contenu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_20957396155c613f0d09f4d6_95410670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_20957396155c613f0d09f4d6_95410670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Enregistrer profil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_701319385c613f0d15c274_47943200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_701319385c613f0d15c274_47943200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?action=registerUsersProfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['newUser']->value->id();?>
" method="post">
<label for="profile">Veuillez renseigner le profil de l'utilisateur:</label><br/>
<select name="profile">
    <option value="1">Administrateur</option>
    <option value="2">Enseignant</option>
    <option value="3">Etudiant</option>
</select>
    
    <input type="submit" value="Valider" />
</form><?php
}
}
/* {/block 'contenu'} */
}
