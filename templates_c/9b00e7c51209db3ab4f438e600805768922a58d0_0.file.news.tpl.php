<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:30:27
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc742c33c4ee9_33758831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b00e7c51209db3ab4f438e600805768922a58d0' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\news.tpl',
      1 => 1556561956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc742c33c4ee9_33758831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16384595535cc742c32e43a7_92081734', 'titre');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1628437555cc742c32f2c12_63945122', 'contenu');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_16384595535cc742c32e43a7_92081734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_16384595535cc742c32e43a7_92081734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
News<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_1628437555cc742c32f2c12_63945122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_1628437555cc742c32f2c12_63945122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="fullNews">
        <div class="fullImage">
            <img src="/Projet_5/public/css/images/<?php echo $_smarty_tpl->tpl_vars['oneNews']->value->imageName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneNews']->value->imageDescription();?>
">
        </div>
        <div class="fullText">
                <h4><?php echo $_smarty_tpl->tpl_vars['oneNews']->value->title();?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['oneNews']->value->content();?>
</p>
            <?php if ((!empty($_SESSION['user']))) {?>
            <div class="link">
                <?php if (in_array(3,$_SESSION['user'])) {?><a href="index.php?action=openUpdateNewsForm&amp;id=<?php echo $_smarty_tpl->tpl_vars['oneNews']->value->id();?>
" ><div>Editer</div></a><?php }?>
                <?php if (in_array(4,$_SESSION['user'])) {?><a href="index.php?action=eraseNews&amp;id=<?php echo $_smarty_tpl->tpl_vars['oneNews']->value->id();?>
" ><div>Supprimer</div></a><?php }?>
            </div>
            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'contenu'} */
}
