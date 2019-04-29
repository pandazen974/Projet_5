<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:33:21
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\newProfile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc74371bfb1e8_67205251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a96a65026304f4d69297f61c372b40c1bd0d3dab' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\newProfile.tpl',
      1 => 1556561849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc74371bfb1e8_67205251 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4566595225cc74371beaac3_11241825', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16605062315cc74371bf5054_31368965', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_4566595225cc74371beaac3_11241825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_4566595225cc74371beaac3_11241825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nouveau profil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_16605062315cc74371bf5054_31368965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_16605062315cc74371bf5054_31368965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?action=addProfile" method="post">
<label for="profile">Choisir un nom pour le profil:</label><br/>
    <input type="text" name="profile" />
    
    <input type="submit" class="form_button" value="Valider" />
</form>
<?php
}
}
/* {/block 'contenu'} */
}
