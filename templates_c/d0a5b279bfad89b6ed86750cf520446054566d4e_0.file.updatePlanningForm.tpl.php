<?php
/* Smarty version 3.1.33, created on 2019-04-20 13:43:12
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\updatePlanningForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cbb21f0618094_25654979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a5b279bfad89b6ed86750cf520446054566d4e' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\updatePlanningForm.tpl',
      1 => 1555767270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cbb21f0618094_25654979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17022745135cbb21f0568be4_07981649', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18193264755cbb21f0576f92_00569054', 'contenu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6603444765cbb21f06143b0_85726201', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_17022745135cbb21f0568be4_07981649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_17022745135cbb21f0568be4_07981649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Modification planning<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_18193264755cbb21f0576f92_00569054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_18193264755cbb21f0576f92_00569054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="index.php?action=modifyPlanning&amp;id=<?php echo $_smarty_tpl->tpl_vars['planning']->value->id();?>
" method="post">
   <h3>Modifier un cours</h3>
<label for="title">Choisir un autre cours:</label><br/>

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
    <input class="datetimepicker" value="<?php echo $_smarty_tpl->tpl_vars['planning']->value->start();?>
" type="text" name="start" >     
    
<label for="end">Fin:</label><br/>
    <input class="datetimepicker" value="<?php echo $_smarty_tpl->tpl_vars['planning']->value->end();?>
" type="text" name="end" >
    
    
        
    <input type="submit" class="form_button" value="Valider" />

</form>
<?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_6603444765cbb21f06143b0_85726201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_6603444765cbb21f06143b0_85726201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
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
