<?php
/* Smarty version 3.1.33, created on 2019-04-29 18:31:42
  from 'C:\Users\onzol\OneDrive\Documents\NetBeansProjects\Projet_5v1\Projet_5\view\editPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cc7430e6c0d33_80630171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '644b3da7be305e427477fa270bfa5eb5797ecbdc' => 
    array (
      0 => 'C:\\Users\\onzol\\OneDrive\\Documents\\NetBeansProjects\\Projet_5v1\\Projet_5\\view\\editPage.tpl',
      1 => 1556561476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cc7430e6c0d33_80630171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5684265945cc7430e677781_90959739', 'titre');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20543839845cc7430e67c132_91521397', 'contenu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15466004635cc7430e6b6a12_49430393', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "view/template.tpl");
}
/* {block 'titre'} */
class Block_5684265945cc7430e677781_90959739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titre' => 
  array (
    0 => 'Block_5684265945cc7430e677781_90959739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Création pages<?php
}
}
/* {/block 'titre'} */
/* {block 'contenu'} */
class Block_20543839845cc7430e67c132_91521397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenu' => 
  array (
    0 => 'Block_20543839845cc7430e67c132_91521397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <form id="page-editor"  action="index.php?action=addContentToPage" method="post">
       
       <label for="pageId">Sélectionner un page:</label><br/>
        <select id="pageId" name="pageId">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id();?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->pageName();?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select><br/>
        <textarea id="content" class="mytextarea" name="content"><?php echo $_smarty_tpl->tpl_vars['selectedPage']->value->content();?>
</textarea>
       
        <input type="submit" class="form_button" value="Valider" />
   </form>

<?php
}
}
/* {/block 'contenu'} */
/* {block 'scripts'} */
class Block_15466004635cc7430e6b6a12_49430393 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_15466004635cc7430e6b6a12_49430393',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=0sjj6aeb0m95o6pdw2ou3t1dedyo5phit4dzaswp6p6lg34c'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    tinymce.init({
    selector: '.mytextarea',
    plugins: ['advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table directionality emoticons template paste'],
    image_advtab: true,
    toolbar_drawer: 'sliding',
    toolbar: ['forecolor backcolor',
    'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist |link image code'
    ],
    color_map: [
    "000000", "Black",
    "993300", "Burnt orange",
    "333300", "Dark olive",
    "003300", "Dark green",
    "003366", "Dark azure",
    "000080", "Navy Blue",
    "333399", "Indigo",
    "333333", "Very dark gray",
    "800000", "Maroon",
    "FF6600", "Orange",
    "808000", "Olive",
    "008000", "Green",
    "008080", "Teal",
    "0000FF", "Blue",
    "666699", "Grayish blue",
    "808080", "Gray",
    "FF0000", "Red",
    "FF9900", "Amber",
    "99CC00", "Yellow green",
    "339966", "Sea green",
    "33CCCC", "Turquoise",
    "3366FF", "Royal blue",
    "800080", "Purple",
    "999999", "Medium gray",
    "FF00FF", "Magenta",
    "FFCC00", "Gold",
    "FFFF00", "Yellow",
    "00FF00", "Lime",
    "00FFFF", "Aqua",
    "00CCFF", "Sky blue",
    "993366", "Red violet",
    "FFFFFF", "White",
    "FF99CC", "Pink",
    "FFCC99", "Peach",
    "FFFF99", "Light yellow",
    "CCFFCC", "Pale green",
    "CCFFFF", "Pale cyan",
    "99CCFF", "Light sky blue",
    "CC99FF", "Plum"
  ],
    height : "1000px",
    a_plugin_option: true,
    images_upload_url: '/Projet_5/?action=feedImagePost',
    images_upload_handler: function (blobInfo, success, failure) {
    var xhr, formData;

    xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', '/Projet_5/?action=feedImagePost');

    xhr.onload = function() {
      var json;

      if (xhr.status != 200) {
        failure('HTTP Error: ' + xhr.status);
        return;
      }

      json = JSON.parse(xhr.responseText);

      if (!json || typeof json.location != 'string') {
        failure('Invalid JSON: ' + xhr.responseText);
        return;
      }

      success(json.location);
    };

    formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());

    xhr.send(formData);
  }
    });
    $(document).ready(function () {
        $("#pageId").change(function(){
        var pageId=$('#pageId').val();
        $.ajax({
            type: "POST",
            data:'selectedPage=' + pageId, 
            url: '/Projet_5/?action=getPage',
            dataType : 'html',
    success : function(code_html, statut){ // code_html contient le HTML renvoyé
        tinymce.remove();
        $('#content').val(code_html);
        tinymce.init({ 
    selector:'#content',
    plugins: ['advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
    'save table directionality emoticons template paste'],
    image_advtab: true,
    toolbar_drawer: 'sliding',
    toolbar: ['forecolor backcolor',
    'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist |link image code'
    ],
    color_map: [
    "000000", "Black",
    "993300", "Burnt orange",
    "333300", "Dark olive",
    "003300", "Dark green",
    "003366", "Dark azure",
    "000080", "Navy Blue",
    "333399", "Indigo",
    "333333", "Very dark gray",
    "800000", "Maroon",
    "FF6600", "Orange",
    "808000", "Olive",
    "008000", "Green",
    "008080", "Teal",
    "0000FF", "Blue",
    "666699", "Grayish blue",
    "808080", "Gray",
    "FF0000", "Red",
    "FF9900", "Amber",
    "99CC00", "Yellow green",
    "339966", "Sea green",
    "33CCCC", "Turquoise",
    "3366FF", "Royal blue",
    "800080", "Purple",
    "999999", "Medium gray",
    "FF00FF", "Magenta",
    "FFCC00", "Gold",
    "FFFF00", "Yellow",
    "00FF00", "Lime",
    "00FFFF", "Aqua",
    "00CCFF", "Sky blue",
    "993366", "Red violet",
    "FFFFFF", "White",
    "FF99CC", "Pink",
    "FFCC99", "Peach",
    "FFFF99", "Light yellow",
    "CCFFCC", "Pale green",
    "CCFFFF", "Pale cyan",
    "99CCFF", "Light sky blue",
    "CC99FF", "Plum"
  ],
    height : "1000px",
    a_plugin_option: true,
    images_upload_url: '/Projet_5/?action=feedImagePost',
    images_upload_handler: function (blobInfo, success, failure) {
    var xhr, formData;

    xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', '/Projet_5/?action=feedImagePost');

    xhr.onload = function() {
      var json;

      if (xhr.status != 200) {
        failure('HTTP Error: ' + xhr.status);
        return;
      }

      json = JSON.parse(xhr.responseText);

      if (!json || typeof json.location != 'string') {
        failure('Invalid JSON: ' + xhr.responseText);
        return;
      }

      success(json.location);
    };

    formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());

    xhr.send(formData);
  }
        }); 

       }

}); 
});
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
