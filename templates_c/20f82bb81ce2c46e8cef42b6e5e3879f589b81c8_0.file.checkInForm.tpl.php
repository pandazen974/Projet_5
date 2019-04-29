<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:55:50
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\checkInForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc748b657d443_32405740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20f82bb81ce2c46e8cef42b6e5e3879f589b81c8' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\checkInForm.tpl',
      1 => 1556561293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc748b657d443_32405740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16771303795cc748b654dd48_16968609', 'titre');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12703760515cc748b6556ab0_20326717', 'contenu');
?>
 
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_16771303795cc748b654dd48_16968609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_16771303795cc748b654dd48_16968609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Création mot de passe<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_12703760515cc748b6556ab0_20326717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_12703760515cc748b6556ab0_20326717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  <form action="index.php?action=createPassword" method="post">
    <h3>Créer votre mot de passe</h3>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" />
    
    <label for="email">Mot de passe:</label><br/>
    <input type="password" name="password" />
    
    <label for="email">Confirmation:</label><br/>
    <input pattern=".{8,}"   required title="8 caracteres minimum" type="password" name="password2" />
    
    <div class="g-recaptcha" data-sitekey="6LcPSJoUAAAAAKcP08QpSZ4xkJ5SH5USntEmmMG4">    
     </div>
     
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php } else {
}?>
    <input type="submit" class="form_button" value="Valider"/>
  </form>
    
<?php
}
}
/* {/block 'contenu'} */
}
