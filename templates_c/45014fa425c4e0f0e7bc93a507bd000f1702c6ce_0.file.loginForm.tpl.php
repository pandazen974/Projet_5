<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:55:30
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\loginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc748a20441a1_27125661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45014fa425c4e0f0e7bc93a507bd000f1702c6ce' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\loginForm.tpl',
      1 => 1556561706,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc748a20441a1_27125661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7318915985cc748a2015d77_10653794', 'titre');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6990259275cc748a201e570_05038188', 'contenu');
?>
   
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_7318915985cc748a2015d77_10653794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_7318915985cc748a2015d77_10653794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Connexion<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_6990259275cc748a201e570_05038188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_6990259275cc748a201e570_05038188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <form action="index.php?action=openSession" method="post">
    <h3>Se connecter</h3>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" />
    
    <label for="pass">Mot de passe:</label><br/>
    <input type="password" id="password" name="password"><br/>
    
    
    <span>Première connexion, veuillez vous enregistrer:<a href="index.php?action=openCheckInForm">S'enregistrer</a></span>
    <?php if (isset($_smarty_tpl->tpl_vars['erreur']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['erreur']->value;?>
</p><?php } else {
}?>
    <input type="submit" class='form_button' value="Valider"/>
  </form>
<?php
}
}
/* {/block 'contenu'} */
}
