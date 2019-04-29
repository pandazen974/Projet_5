<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:30:47
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc742d75e32f4_60457181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c46d8432ad423d974e3edb29896decca713d7245' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\contact.tpl',
      1 => 1556561371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc742d75e32f4_60457181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19972078065cc742d757e3b0_67103059', 'titre');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16536266075cc742d7586753_47549010', 'contenu');
?>
 

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_19972078065cc742d757e3b0_67103059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_19972078065cc742d757e3b0_67103059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contacts<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_16536266075cc742d7586753_47549010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_16536266075cc742d7586753_47549010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="contact-container">
    <div id="contact-form">
        <form action="index.php?action=contactAdmin" method="post">
            <h3>Nous contacter:</h3>
            <label for="email">Email:</label><br/>
            <input type="text" name="email" required placeholder="Votre email" />
            
            <label for="object">Objet:</label><br/>
            <input type="text" name="object" required placeholder="Votre objet"  />
    
            <label for="message">Votre message:</label><br/>
            <textarea id="message" name="message" required placeholder="Votre message"></textarea>
    
    
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php } else {
}?>
            <?php if (isset($_smarty_tpl->tpl_vars['checked']->value)) {?><p><?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
</p><?php } else {
}?> 
            <input type="submit" class='form_button' value="Valider"/>
        </form>
    </div>
    <div id="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.527141661482!2d7.246164650510965!3d43.69959305734607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd0115aeec977%3A0x295d5e5b1db40505!2sLyc%C3%A9e+Honor%C3%A9+d&#39;Estienne+d&#39;Orves!5e0!3m2!1sfr!2sfr!4v1556385276970!5m2!1sfr!2sfr" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<?php
}
}
/* {/block 'contenu'} */
}
