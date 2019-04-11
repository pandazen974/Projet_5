{extends file="view/template.tpl"}

{block name=titre}Création articles{/block}


{block name=contenu}
    <h3>Modifier un article</h3>
  <form method="post" action="index.php?action=modifyNews&amp;id={$news->id()}" enctype="multipart/form-data">
    
    <label for="title">Titre de l'article:</label><br/>
    <input type="text" name="title" value="{$news->title()}" />
    
    <label for="content">Contenu:</label><br/>
    <input type="content" name="content" value="{$news->content()}"/>
    
    <label for="imageName">Nom de l'image:</label><br/>
    <input type="text" name="imageName" value="{$news->imageName()}"><br/>
    
    <label for="image">Insérer une nouvelle image:</label><br/>
    <input type="file" name="image"><br/>
    
    <label for="imageDescription">Description de votre fichier (max. 255 caractères) :</label><br />
    <textarea name="imageDescription" id="description">{$news->imageDescription()}</textarea><br />
     
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
   
    <input type="submit" value="Valider"/>
  </form>
{/block}   