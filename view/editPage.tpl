{extends file="view/template.tpl"}

{block name=titre}Création pages{/block}

{block name=contenu}
   <form id="page-editor"  action="index.php?action=addContentToPage" method="post">
       
       <label for="pageId">Sélectionner un page:</label><br/>
        <select id="pageId" name="pageId">
        {foreach $pages as $page}<option value="{$page->id()}">{$page->pageName()}</option>{/foreach}
        </select><br/>
        <textarea id="content" class="mytextarea" name="content">{$page->content()}</textarea>
       
        <input type="submit" class="form_button" value="Valider" />
   </form>

{/block}
{block name=scripts}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=0sjj6aeb0m95o6pdw2ou3t1dedyo5phit4dzaswp6p6lg34c'></script>
    <script>
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
</script>
{/block}