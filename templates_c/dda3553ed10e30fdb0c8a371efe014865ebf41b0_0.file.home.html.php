<?php
/* Smarty version 3.1.33, created on 2019-02-05 15:03:53
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c59a5d9ca2794_70483328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dda3553ed10e30fdb0c8a371efe014865ebf41b0' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\home.html',
      1 => 1549379026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c59a5d9ca2794_70483328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2819209385c59a5d9c94dc4_50983303', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1444160525c59a5d9c9f140_59611677', 'contenu');
?>

</div><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_2819209385c59a5d9c94dc4_50983303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_2819209385c59a5d9c94dc4_50983303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_1444160525c59a5d9c9f140_59611677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1444160525c59a5d9c9f140_59611677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Bienvenue sur php world</p><?php
}
}
/* {/block 'contenu'} */
}
