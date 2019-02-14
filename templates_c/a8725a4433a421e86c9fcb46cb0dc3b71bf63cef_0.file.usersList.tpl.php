<?php
/* Smarty version 3.1.33, created on 2019-02-14 09:00:41
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\usersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c652e390a7556_73251350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8725a4433a421e86c9fcb46cb0dc3b71bf63cef' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\usersList.tpl',
      1 => 1550134824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c652e390a7556_73251350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11833143015c652e39026b67_63587810', 'titre');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15777409795c652e3902b180_01241000', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_11833143015c652e39026b67_63587810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_11833143015c652e39026b67_63587810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Liste Utilisateurs<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_15777409795c652e3902b180_01241000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_15777409795c652e3902b180_01241000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Lister utilisateurs</h3>
    <a href="index.php?action=openUserForm"><button>Créer</button></a>
<table id="table_id" class="display cell-border order-column stripe">
    <thead>
        <tr>
            <th>Id</th>
     
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
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id();?>
</td>

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
">Modifier</a></td>
            
            <td><a href="index.php?action=eraseUser&amp;id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id();?>
">Supprimer</a></li></td>
        </tr>
    
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https:////cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/Projet_5/public/js/datatable.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'contenu'} */
}
