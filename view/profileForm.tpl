{extends file="view/template.tpl"}

{block name=titre}Enregistrer profil{/block}

{block name=contenu}<form action="index.php?action=registerUsersProfile&amp;id={$newUser->id()}" method="post">
<label for="profile">Veuillez renseigner le profil de l'utilisateur:</label><br/>
<select name="profile">
    <option value="1">Administrateur</option>
    <option value="2">Enseignant</option>
    <option value="3">Etudiant</option>
</select>
    
    <input type="submit" value="Valider" />
</form>
{/block}