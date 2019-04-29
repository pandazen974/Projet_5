{extends file="view/template.tpl"}

{block name=titre}Modification articles{/block}


{block name=contenu}
    
  <form method="post" action="index.php?action=modifyNews&amp;id={$news->id()}" enctype="multipart/form-data">
    <h3>Modifier un article</h3>
    <label for="title">Titre de l'article:</label><br/>
    <input type="text" required name="title" value="{$news->title()}" />
    
    <label for="content">Contenu:</label><br/>
    <input type="content" required name="content" value="{$news->content()}"/>
    
    <label for="imageName">Nom de l'image:</label><br/>
    <input type="text" required name="imageName" value="{$news->imageName()}"><br/>
    
    <label for="image">Insérer une nouvelle image:</label><br/>
    <input type="file" required class="form_button" name="image"><br/>
    
    <label for="imageDescription">Description de votre fichier (max. 255 caractères) :</label><br />
    <textarea name="imageDescription" id="description">{$news->imageDescription()}</textarea><br />
     
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
   
    <input type="submit" class="form_button" value="Valider"/>
    {if isset($erreur)}<p>{$erreur}</p>{else $erreur eq 'null'}{/if}
  </form>
{/block}   

{block name=scripts}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{/block}