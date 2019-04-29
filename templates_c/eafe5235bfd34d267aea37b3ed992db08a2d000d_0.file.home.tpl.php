<?php
/* Smarty version 3.1.33, created on 2019-04-29 17:55:24
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc73a8c743119_27921818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eafe5235bfd34d267aea37b3ed992db08a2d000d' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\home.tpl',
      1 => 1556560005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc73a8c743119_27921818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15004576435cc73a8c5c1af8_16032193', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14300569555cc73a8c5cd424_44492358', 'contenu');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13091033915cc73a8c73a957_24960107', 'scripts');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_15004576435cc73a8c5c1af8_16032193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_15004576435cc73a8c5c1af8_16032193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_14300569555cc73a8c5cd424_44492358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_14300569555cc73a8c5cd424_44492358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<div class="slideshow-container">

  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="/Projet_5/public/css/images/img1.png" style="width:100%" alt="face lycée Estienne d'Orves">
    <div class="text">Lycée Honoré d'Estienne d'Orves</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="/Projet_5/public/css/images/img2.png" style="width:100%" alt="vue arrière lycée Estienne d'Orves">
    <div class="text">Cour du lycée</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="/Projet_5/public/css/images/img3.png" style="width:100%" alt="salle cdi lycée Estienne d'Orves">
    <div class="text">Espace bibliothèque</div>
  </div>

 
  <a class="prevs" onclick="slider.plusSlides(-1);">&#10094;</a>
  <a class="nexts" onclick="slider.plusSlides(1);">&#10095;</a>
</div>
<br>


<div id="dot" style="text-align:center">
  <span class="dot" onclick="slider.currentSlide(1);"></span>
  <span class="dot" onclick="slider.currentSlide(2);"></span>
  <span class="dot" onclick="slider.currentSlide(3);"></span>
</div> 

<h2 id="news-title">Actualités</h2>

<div id="paging">
    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['totalPages']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['totalPages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
        <a href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="page<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="paging-link"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
    <?php }
}
?>
</div>

<div id="containerId" class="container">
    
<div id="contentBox">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allNews']->value, 'oneNews');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneNews']->value) {
?>
    <div class="newsBox">
        <div class="imagesBox">
            <img src="/Projet_5/public/css/images/<?php echo $_smarty_tpl->tpl_vars['oneNews']->value->imageName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oneNews']->value->imageDescription();?>
">
        </div>
        <div class="newstext">
            <h4><?php echo $_smarty_tpl->tpl_vars['oneNews']->value->title();?>
</h4>
            <p><?php echo substr($_smarty_tpl->tpl_vars['oneNews']->value->content(),0,100);?>
...</p>
            <a href="index.php?action=readOneNews&amp;id=<?php echo $_smarty_tpl->tpl_vars['oneNews']->value->id();?>
" >Lire la suite</a>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>
<?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_13091033915cc73a8c73a957_24960107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_13091033915cc73a8c73a957_24960107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <?php echo '<script'; ?>
 src='/Projet_5/public/js/slider.js'><?php echo '</script'; ?>
> 
   
   <?php echo '<script'; ?>
> 
     $(document).ready(function(){
        $('.paging-link').click(function(event){
            var url = $(this).attr('href');
            url=url+' #contentBox';
            $('#containerId').load(url);
            event.preventDefault();
        });
    });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='/Projet_5/public/js/paging.js'><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
