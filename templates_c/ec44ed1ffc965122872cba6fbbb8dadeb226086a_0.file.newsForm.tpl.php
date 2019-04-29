<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:32:37
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\newsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc743459ae112_95459605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec44ed1ffc965122872cba6fbbb8dadeb226086a' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\newsForm.tpl',
      1 => 1556561405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc743459ae112_95459605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18137700425cc7434596cfb1_02248633', 'titre');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15237151915cc743459748e7_51176961', 'contenu');
?>
   

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_18137700425cc7434596cfb1_02248633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_18137700425cc7434596cfb1_02248633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Création articles<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_15237151915cc743459748e7_51176961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_15237151915cc743459748e7_51176961',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <form method="post" action="index.php?action=addNews" enctype="multipart/form-data">
    <h3>Créer un article</h3>
    <label for="title">Titre de l'article:</label><br/>
    <input type="text" required name="title" />
    
    <label for="content">Contenu:</label><br/>
    <textarea name="content"></textarea><br/>
    
    <label for="imageName">Nom de l'image:</label><br/>
    <input type="text" required name="imageName"><br/>
    
    <label for="image">Insérer une image:</label><br/>
    <input type="file" required class="form_button" name="image"><br/>
    
    <label for="imageDescription">Description de votre fichier (max. 255 caractères) :</label><br />
    <textarea name="imageDescription" id="description"></textarea><br />
     
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
   
    <input type="submit" class="form_button" value="Valider"/>
    <?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>
</p><?php } else {
}?>
  </form>
<?php
}
}
/* {/block 'contenu'} */
}
