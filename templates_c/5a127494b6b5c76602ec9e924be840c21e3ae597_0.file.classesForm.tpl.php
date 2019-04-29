<?php
/* Smarty version 3.1.33, created on 2019-02-17 17:32:19
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\classesForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c699aa30113e2_59982286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a127494b6b5c76602ec9e924be840c21e3ae597' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\classesForm.tpl',
      1 => 1550424692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c699aa30113e2_59982286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16723196225c699aa3006895_07095247', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6004634115c699aa300c255_27447027', 'contenu');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_16723196225c699aa3006895_07095247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_16723196225c699aa3006895_07095247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Création cours<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_6004634115c699aa300c255_27447027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_6004634115c699aa300c255_27447027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Créer un cours </h3>*



<form action="index.php?action=setClass" method="post">


    <label for="className">Intitulé du cours:</label><br/>
    <input type="text" name="className" />
    

    
    <input type="submit" value="Valider" />

</form>
<?php
}
}
/* {/block 'contenu'} */
}
