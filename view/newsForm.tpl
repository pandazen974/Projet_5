{extends file="view/template.tpl"}

{block name=titre}Création articles{/block}


{block name=contenu}
    
  <form method="post" action="index.php?action=addNews" enctype="multipart/form-data">
    <h3>Créer un article</h3>
    <label for="title">Titre de l'article:</label><br/>
    <input type="text" required name="title" />
    
    <label for="content">Contenu:</label><br/>
    <textarea name="content"></textarea><br/>
    
    <label for="imageName">Nom de l'image:</label><br/>
    <input type="text" required name="imageName"><br/>
    
    <label for="image">Insérer une image:</label><br/>
    <input type="file" required class="form_button" name="image"><br/>
    
    <label for="imageDescription">Description de votre fichier (max. 255 caractères) :</label><br />
    <textarea name="imageDescription" id="description"></textarea><br />
     
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
   
    <input type="submit" class="form_button" value="Valider"/>
    {if isset($erreur)}<p>{$erreur}</p>{else $erreur eq 'null'}{/if}
  </form>
{/block}   

