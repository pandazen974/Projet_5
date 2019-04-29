<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:02:40
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc73c40b63e13_06753581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7873df6a1ff52b3c78c21c10eaa6b1d9727e297' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\account.tpl',
      1 => 1556560951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc73c40b63e13_06753581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16411925235cc73c40a9b1d8_18735482', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6147522675cc73c40aa3109_10285816', 'contenu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19272201915cc73c40b5fc82_83893196', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_16411925235cc73c40a9b1d8_18735482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_16411925235cc73c40a9b1d8_18735482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Validation<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_6147522675cc73c40aa3109_10285816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_6147522675cc73c40aa3109_10285816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Comptes en attente</h3>
<table id="account" class="display cell-border order-column stripe">
    <thead>
        <tr>
     
            <th>Nom</th>

            <th>Prénom</th>

            <th>Autres noms</th>
       
            <th>Email</th>
            
            <th>Inscrit le</th>
       
            <th>Valider</th>
            
            <th>Rejetter</th>

          </tr>
   </thead>
    <tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
   
        <tr>

            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->lastName();?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->firstName();?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->middleName();?>
</td>
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email();?>
</td>
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->registrationDate();?>
</td>
            
            <td><a href="index.php?action=confirmAccount&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id();?>
"><span style='color:rgba(63, 195, 128, 1)'><i class="fas fa-check-circle"></i></span></a></td>
            
            <td><button class="push"><span style='color:rgba(242, 38, 19, 1)'><i class="fas fa-ban"></i></span></a></button></td>
        </tr>
    
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
<div id="myModaltwo" class="modal">

  <div class="modal-content">
    <span class="shut">&times;</span>
    <p>Voulez vous supprimer cet utilisateur?</p>
    <a href="index.php?action=rejectAccount&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id();?>
"><button class="form_button">Supprimer</button></a>
  </div>

</div>
</table>
<?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_19272201915cc73c40b5fc82_83893196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_19272201915cc73c40b5fc82_83893196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https:////cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/Projet_5/public/js/datatable.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/Projet_5/public/js/modal2.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
