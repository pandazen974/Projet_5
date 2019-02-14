<?php
/* Smarty version 3.1.33, created on 2019-02-06 18:07:24
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5b225c571558_51711941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc1fcf68693bf17f70af37c75b61a196ba7ca71' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\error.tpl',
      1 => 1549476438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5b225c571558_51711941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11904582325c5b225c553908_11551555', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10224645195c5b225c56c091_48335181', 'contenu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_11904582325c5b225c553908_11551555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_11904582325c5b225c553908_11551555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Enregistrer profil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_10224645195c5b225c56c091_48335181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_10224645195c5b225c56c091_48335181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Oups... La page demandée n'a pas été trouvée</p><?php
}
}
/* {/block 'contenu'} */
}
