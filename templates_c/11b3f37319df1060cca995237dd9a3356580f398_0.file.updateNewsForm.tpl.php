<?php
/* Smarty version 3.1.33, created on 2019-04-29 19:36:50
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\updateNewsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc752525edf23_02906267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11b3f37319df1060cca995237dd9a3356580f398' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\updateNewsForm.tpl',
      1 => 1556562313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc752525edf23_02906267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17455300795cc75252594e54_90264100', 'titre');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18255342585cc752525992a1_81999164', 'contenu');
?>
   

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_17455300795cc75252594e54_90264100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_17455300795cc75252594e54_90264100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Modification articles<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_18255342585cc752525992a1_81999164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_18255342585cc752525992a1_81999164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <form method="post" action="index.php?action=modifyNews&amp;id=<?php echo $_smarty_tpl->tpl_vars['news']->value->id();?>
" enctype="multipart/form-data">
    <h3>Modifier un article</h3>
    <label for="title">Titre de l'article:</label><br/>
    <input type="text" required name="title" value="<?php echo $_smarty_tpl->tpl_vars['news']->value->title();?>
" />
    
    <label for="content">Contenu:</label><br/>
    <input type="content" required name="content" value="<?php echo $_smarty_tpl->tpl_vars['news']->value->content();?>
"/>
    
    <label for="imageName">Nom de l'image:</label><br/>
    <input type="text" required name="imageName" value="<?php echo $_smarty_tpl->tpl_vars['news']->value->imageName();?>
"><br/>
    
    <label for="image">Insérer une nouvelle image:</label><br/>
    <input type="file" required class="form_button" name="image"><br/>
    
    <label for="imageDescription">Description de votre fichier (max. 255 caractères) :</label><br />
    <textarea name="imageDescription" id="description"><?php echo $_smarty_tpl->tpl_vars['news']->value->imageDescription();?>
</textarea><br />
     
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
