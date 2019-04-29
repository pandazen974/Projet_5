<?php
/* Smarty version 3.1.33, created on 2019-03-06 18:05:17
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\updateGroupPlanningForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c800bdd309a67_80412447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '324db9330ad2cb0daa81162650771d481adfa82e' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\updateGroupPlanningForm.tpl',
      1 => 1551895472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c800bdd309a67_80412447 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13266626355c800bdd2d1ce5_71324112', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14042267815c800bdd2d70e5_10873012', 'contenu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_13266626355c800bdd2d1ce5_71324112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_13266626355c800bdd2d1ce5_71324112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Attribution planning<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_14042267815c800bdd2d70e5_10873012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_14042267815c800bdd2d70e5_10873012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Attribuer un cours à un groupe </h3>

<form action="index.php?action=updateGroupPlanning" method="post">
  
<label for="groupName">:</label><br/>
    <select name="groupName">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->groupName();?>
(<?php echo $_smarty_tpl->tpl_vars['group']->value->promotion();?>
)</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
   
    <input type="hidden" name="planningId" value="<?php echo $_smarty_tpl->tpl_vars['newPlanning']->value->id();?>
">
    <input type="submit" value="Valider" />

</form>
    
<?php
}
}
/* {/block 'contenu'} */
}
