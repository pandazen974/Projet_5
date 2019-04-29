<?php
/* Smarty version 3.1.33, created on 2019-04-27 18:07:18
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\updateRightsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc49a564ef709_25032774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869a501e8d5dd8189dfe48edcf3c465281eca09b' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\updateRightsForm.tpl',
      1 => 1556388424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc49a564ef709_25032774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12460818615cc49a5647cd58_85922777', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8537367725cc49a564831f2_46914896', 'contenu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_12460818615cc49a5647cd58_85922777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_12460818615cc49a5647cd58_85922777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mettre à jour les droits<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_8537367725cc49a564831f2_46914896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_8537367725cc49a564831f2_46914896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <form action="index.php?action=modifyProfileRights&amp;id=<?php echo $_POST['profile'];?>
" method="post">
     <h3>Mise à jour des droits</h3>
     <table class="table-rights display cell-border order-column stripe">  
   
     
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRights']->value, 'right');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['right']->value) {
?>
        <tr><td><label for="case"><?php echo $_smarty_tpl->tpl_vars['right']->value->rightName();?>
:</label></td><td><input<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cases']->value, 'case');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['case']->value) {
?> <?php if (in_array($_smarty_tpl->tpl_vars['right']->value->id(),$_smarty_tpl->tpl_vars['case']->value)) {?>checked<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> type="checkbox" name='newRights[]' value="<?php echo $_smarty_tpl->tpl_vars['right']->value->id();?>
" /></td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   
    
    
      </table>
        <input type="submit" class="form_button" value="Valider" />
   </form>

<?php
}
}
/* {/block 'contenu'} */
}
