<?php
/* Smarty version 3.1.33, created on 2019-03-26 07:48:21
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\passwordForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c99d945a542a8_12103354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a26f269a0f4183df10a7de812f334b015de33760' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\passwordForm.tpl',
      1 => 1553584831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c99d945a542a8_12103354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15567515895c99d945a3e022_13599733', 'titre');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18607746155c99d945a4f237_72536690', 'contenu');
?>
  <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_15567515895c99d945a3e022_13599733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_15567515895c99d945a3e022_13599733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Confirmer code<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_18607746155c99d945a4f237_72536690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_18607746155c99d945a4f237_72536690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Confirmation code</h3>
  <form action="index.php?action=confirmCode" method="post">
    
    
    <label for="code">Entrez le code secret reçu par email:</label><br/>
    <input type="password" name="code" />
    
    
    <input type="submit" value="Valider"/>
  </form>
<?php
}
}
/* {/block 'contenu'} */
}
