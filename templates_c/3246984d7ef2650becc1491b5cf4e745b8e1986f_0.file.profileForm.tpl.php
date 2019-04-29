<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:39:03
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\profileForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc744c70c6905_60254969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3246984d7ef2650becc1491b5cf4e745b8e1986f' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\profileForm.tpl',
      1 => 1556562080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc744c70c6905_60254969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8967405965cc744c707a6c0_61648229', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1882566875cc744c70825b7_27842266', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_8967405965cc744c707a6c0_61648229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_8967405965cc744c707a6c0_61648229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Enregistrer profil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_1882566875cc744c70825b7_27842266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1882566875cc744c70825b7_27842266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?action=registerUsersProfile&amp;id=<?php echo $_smarty_tpl->tpl_vars['newUser']->value->id();?>
" method="post">
<label for="profile">Veuillez renseigner le profil de l'utilisateur:</label><br/>
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
}
