<?php
/* Smarty version 3.1.33, created on 2019-04-29 17:56:37
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\profileListForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc73ad55668b5_16383825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7922ef54597f025c0358df7a72f6a7aceba0721a' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\profileListForm.tpl',
      1 => 1556560285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc73ad55668b5_16383825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10447819885cc73ad54bb290_29762728', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79815485cc73ad54cc641_49112696', 'contenu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1697052625cc73ad5562995_53621477', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_10447819885cc73ad54bb290_29762728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_10447819885cc73ad54bb290_29762728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Selection profil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_79815485cc73ad54cc641_49112696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_79815485cc73ad54cc641_49112696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?action=showProfileRights" method="post">
<label for="profile">Sélectionner un profil:</label><br/>
<select name="profile">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
?>
    <option value=<?php echo $_smarty_tpl->tpl_vars['profile']->value->id();?>
><?php echo $_smarty_tpl->tpl_vars['profile']->value->profileName();?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
    
    <input type="submit" class="form_button" value="Valider" />
</form>
<?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_1697052625cc73ad5562995_53621477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1697052625cc73ad5562995_53621477',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
