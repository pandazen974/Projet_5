<?php
/* Smarty version 3.1.33, created on 2019-04-29 17:56:42
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\deleteProfileForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc73adadf62e0_53500356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80df97263223b5d78aadabe32519f38f0ddcdc12' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\deleteProfileForm.tpl',
      1 => 1556560057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc73adadf62e0_53500356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2283164685cc73adad63326_89978352', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4587688095cc73adad69a23_91124485', 'contenu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11450201485cc73adadf0280_39969082', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_2283164685cc73adad63326_89978352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_2283164685cc73adad63326_89978352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Suppression profil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_4587688095cc73adad69a23_91124485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_4587688095cc73adad69a23_91124485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?action=eraseProfileRights" method="post">
<label for="profile">Supprimer un profil:</label><br/>
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
class Block_11450201485cc73adadf0280_39969082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_11450201485cc73adadf0280_39969082',
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
