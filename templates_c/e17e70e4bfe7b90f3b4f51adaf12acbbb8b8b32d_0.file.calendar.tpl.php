<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:05:28
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc73ce827c3c7_35111013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e17e70e4bfe7b90f3b4f51adaf12acbbb8b8b32d' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\calendar.tpl',
      1 => 1556561120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc73ce827c3c7_35111013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9164595095cc73ce82691c2_70123890', 'titre');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8848923245cc73ce826fa61_23116926', 'contenu');
?>
   
 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19284375465cc73ce8277d23_60527032', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_9164595095cc73ce82691c2_70123890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_9164595095cc73ce82691c2_70123890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
EDT<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_8848923245cc73ce826fa61_23116926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_8848923245cc73ce826fa61_23116926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<div id="calendar">
   <div id="modal">
        <div id="eventOptions">
            <div class="modal-header">
               <span id="close">&times;</span>
               <h2>Cours:</h2><p id="title"><p>
            </div>
            <div class="modal-body">    
                <a href="" id="delete_link"><button id="delete" class="fc-addButton-button ui-button ui-state-default ui-corner-left ui-corner-right"><span class="ui-icon ui-icon-trash"></span>Supprimer</button></a>
                <a href="" id="edit_link"><button id="edit" class="fc-addButton-button ui-button ui-state-default ui-corner-left ui-corner-right"><span class="ui-icon ui-icon-pencil"></span>Modifier</button></a>   
            </div> 
    
         </div>
    </div>
</div>

 <?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_19284375465cc73ce8277d23_60527032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_19284375465cc73ce8277d23_60527032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src='/Projet_5/public/lib/jquery.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='/Projet_5/public/lib/moment.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='/Projet_5/public/lib/fullcalendar.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='/Projet_5/public/lib/locale/fr.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='/Projet_5/public/js/calendar.js'><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
