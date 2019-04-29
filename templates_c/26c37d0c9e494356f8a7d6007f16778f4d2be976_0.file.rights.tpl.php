<?php
/* Smarty version 3.1.33, created on 2019-04-11 08:16:44
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\rights.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5caef7ec3e6d45_16685916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26c37d0c9e494356f8a7d6007f16778f4d2be976' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\rights.tpl',
      1 => 1554970562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5caef7ec3e6d45_16685916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6451953075caef7ec2902f4_65679916', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12306343955caef7ec298440_22765357', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_6451953075caef7ec2902f4_65679916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_6451953075caef7ec2902f4_65679916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Création Droits<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_12306343955caef7ec298440_22765357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_12306343955caef7ec298440_22765357',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <form id="case" action="index.php?action=addProfileRights&amp;id=<?php echo $_smarty_tpl->tpl_vars['newProfile']->value->id();?>
" method="post">
     <table id="table_id" class="display cell-border order-column stripe">  
   
     
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRights']->value, 'right');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['right']->value) {
?>
        <tr><td><label for="case"><?php echo $_smarty_tpl->tpl_vars['right']->value->rightName();?>
:</label></td><td><input type="checkbox" name='cases[]' value="<?php echo $_smarty_tpl->tpl_vars['right']->value->id();?>
" /></td></tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   
    
    
      </table>
    <input type="submit" value="Valider" />
   </form>

<?php
}
}
/* {/block 'contenu'} */
}
