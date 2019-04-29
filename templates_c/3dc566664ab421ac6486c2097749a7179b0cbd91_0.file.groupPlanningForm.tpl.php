<?php
/* Smarty version 3.1.33, created on 2019-04-29 19:24:57
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\groupPlanningForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc74f895ae1f8_20464879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc566664ab421ac6486c2097749a7179b0cbd91' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\groupPlanningForm.tpl',
      1 => 1556561642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc74f895ae1f8_20464879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1372211355cc74f895697c5_11266560', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7670353775cc74f8956dd00_30482933', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_1372211355cc74f895697c5_11266560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_1372211355cc74f895697c5_11266560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Attribution planning<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_7670353775cc74f8956dd00_30482933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_7670353775cc74f8956dd00_30482933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="index.php?action=registerGroupPlanning" method="post">
  <h3>Attribuer un cours à un groupe </h3>
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
">
    <input type="submit" class="form_button" value="Valider" />

</form>
    
<?php
}
}
/* {/block 'contenu'} */
}
