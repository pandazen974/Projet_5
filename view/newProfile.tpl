{extends file="view/template.tpl"}

{block name=titre}Nouveau profil{/block}

{block name=contenu}<form action="index.php?action=addProfile" method="post">
<label for="profile">Choisir un nom pour le profil:</label><br/>
    <input type="text" name="profile" />
    
    <input type="submit" class="form_button" value="Valider" />
</form>
{/block}