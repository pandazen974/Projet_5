<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:30:35
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\selectedPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc742cbc877b2_32089690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d77795bf019fe9db8f9192b656d1b4bb73cdca' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\selectedPage.tpl',
      1 => 1556562110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc742cbc877b2_32089690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20036208645cc742cbc5a012_15931019', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15396297135cc742cbc7d192_19679338', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_20036208645cc742cbc5a012_15931019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_20036208645cc742cbc5a012_15931019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['selectedPage']->value->pageName();
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_15396297135cc742cbc7d192_19679338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_15396297135cc742cbc7d192_19679338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-content">
    <?php echo $_smarty_tpl->tpl_vars['selectedPage']->value->content();?>

    </div>
<?php
}
}
/* {/block 'contenu'} */
}
