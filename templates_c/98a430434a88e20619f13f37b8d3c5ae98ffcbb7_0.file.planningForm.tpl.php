<?php
/* Smarty version 3.1.33, created on 2019-04-29 19:21:41
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\planningForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc74ec5e9eb85_84864452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a430434a88e20619f13f37b8d3c5ae98ffcbb7' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\planningForm.tpl',
      1 => 1556562030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc74ec5e9eb85_84864452 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5275084695cc74ec5e231d9_26885226', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8082876435cc74ec5e28d42_43713333', 'contenu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6587289645cc74ec5e9c383_87355626', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_5275084695cc74ec5e231d9_26885226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_5275084695cc74ec5e231d9_26885226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Plannification<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_8082876435cc74ec5e28d42_43713333 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_8082876435cc74ec5e28d42_43713333',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<form action="index.php?action=addEvent" method="post">
<h3>Plannifier un cours </h3>
<label for="title">Sélectionner un cours:</label><br/>
    <select id="title" name="title">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classes']->value, 'class');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['class']->value->title();?>
"><?php echo $_smarty_tpl->tpl_vars['class']->value->teachingUnit();?>
:<?php echo $_smarty_tpl->tpl_vars['class']->value->title();?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select><br/>
    
<label for="teacher">Enseignant:</label><br/>
    <select id="teacher" name="teacher">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teachers']->value, 'teacher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
?><option value=" <?php echo $_smarty_tpl->tpl_vars['teacher']->value->lastName();?>
 <?php echo $_smarty_tpl->tpl_vars['teacher']->value->firstName();?>
"><?php echo $_smarty_tpl->tpl_vars['teacher']->value->lastName();?>
 <?php echo $_smarty_tpl->tpl_vars['teacher']->value->firstName();?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    
<label for="start">Début:</label><br/>
    <input class="datetimepicker"  type="text" name="start" >     
    
<label for="end">Fin:</label><br/>
    <input class="datetimepicker" type="text" name="end" >
       
    <input type="submit" class="form_button" value="Valider" />

</form>
<?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_6587289645cc74ec5e9c383_87355626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_6587289645cc74ec5e9c383_87355626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src='/Projet_5/public/lib/jquery.datetimepicker.full.js'><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src='/Projet_5/public/js/planningForm.js'><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
