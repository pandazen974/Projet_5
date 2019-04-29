<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:40:57
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\groupForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc745392c3dd7_19375268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f896736d9f6dd3879cb7fbc6334e576a3257edc6' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\groupForm.tpl',
      1 => 1556561600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc745392c3dd7_19375268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16104251665cc745392ac631_33344606', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13952763215cc745392b1499_63531683', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_16104251665cc745392ac631_33344606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_16104251665cc745392ac631_33344606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Promotion<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_13952763215cc745392b1499_63531683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_13952763215cc745392b1499_63531683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?action=registerStudentsGroup&amp;id=<?php echo $_smarty_tpl->tpl_vars['newUserProfile']->value->userId();?>
" method="post">
<h3>Groupe Etudiant</h3>
<label for="promotion">Veuillez renseigner l'année d'inscription de l'étudiant:</label><br/>
<select name="promotion">
    <option value="1">1ère année</option>
    <option value="2">2ème année</option>
    <option value="3">3ème année</option>
</select>
    
    <input type="submit" class="form_button" value="Valider" />
</form>
<?php
}
}
/* {/block 'contenu'} */
}
