<?php
/* Smarty version 3.1.33, created on 2019-04-27 20:59:09
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\newGroupPlanningForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc4c29dba40a3_20209664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6dd7f7c96fd7490ab1e1d7227c03164bf6aa579' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\newGroupPlanningForm.tpl',
      1 => 1555693416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc4c29dba40a3_20209664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4695399585cc4c29db318e8_02155612', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8409207165cc4c29db47fa9_03314848', 'contenu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_4695399585cc4c29db318e8_02155612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_4695399585cc4c29db318e8_02155612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Reattribution planning<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_8409207165cc4c29db47fa9_03314848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_8409207165cc4c29db47fa9_03314848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="index.php?action=registerGroupPlanning" method="post">
<h3>Réattribuer un cours à un groupe </h3>
<label for="groupName"></label><br/>
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
"/>
    <input type="submit" class="form_button" value="Valider" />

</form>
    
<?php
}
}
/* {/block 'contenu'} */
}
