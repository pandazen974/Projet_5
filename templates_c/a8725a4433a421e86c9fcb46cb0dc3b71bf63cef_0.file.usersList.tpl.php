<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:03:40
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\usersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc73c7c839f54_44092445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8725a4433a421e86c9fcb46cb0dc3b71bf63cef' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\usersList.tpl',
      1 => 1556561017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc73c7c839f54_44092445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9716565975cc73c7c6dd7f2_09067868', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11692262465cc73c7c6e7806_22385255', 'contenu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1965835965cc73c7c833ef3_32838584', 'scripts');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_9716565975cc73c7c6dd7f2_09067868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_9716565975cc73c7c6dd7f2_09067868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste Utilisateurs<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_11692262465cc73c7c6e7806_22385255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_11692262465cc73c7c6e7806_22385255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Lister utilisateurs</h3>
    
<table id="table_id" class="display cell-border order-column stripe">
    <?php if (in_array(13,$_SESSION['user'])) {?><a href="index.php?action=openUserForm" id="add-link"><button id="add-button"><i class="fas fa-user-plus"></i>Ajouter</button></a><?php }?>
    <thead>
        <tr>
            
            <th>Nom</th>

            <th>Prénom</th>

            <th>Autres noms</th>
       
            <th>Adresse</th>
       
            <th>Ville</th>
       
            <th>Code postal</th>
       
            <th>Numéro de Téléphone</th>
       
            <th>Né le</th>
       
            <th>Email</th>
       
            <th>Inscrit le</th>
            
            <th>Editer</th>
            
            <th>Supprimer</th>

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
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->address();?>
</td>

            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->city();?>
</td>
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->postalCode();?>
</td>
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->telNumber();?>
</td>
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->birth();?>
</td>
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email();?>
</td>
       
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->registrationDate();?>
</td>
            
            <td><a href="index.php?action=openUserUpdateForm&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id();?>
"><span style='color:rgba(25, 181, 254, 1)'><i class="fas fa-edit"></i></span></a></td>
            
            <td><button class="push"><span style='color:rgba(249, 105, 14, 1)'><i class="fas fa-trash"></i></span></button></td>
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
    <a href="index.php?action=eraseUser&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id();?>
"><button class="form_button">Supprimer</button></a>
  </div>

</div>
</table>

<?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_1965835965cc73c7c833ef3_32838584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1965835965cc73c7c833ef3_32838584',
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
