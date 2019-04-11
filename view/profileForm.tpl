{extends file="view/template.tpl"}

{block name=titre}Enregistrer profil{/block}

{block name=contenu}<form action="index.php?action=registerUsersProfile&amp;id={$newUser->id()}" method="post">
<label for="profile">Veuillez renseigner le profil de l'utilisateur:</label><br/>
<select name="profile">
    {foreach $profiles as $profile}
    <option value={$profile->id()}>{$profile->profileName()}</option>
    {/foreach}
</select>
    
    <input type="submit" value="Valider" />
</form>
{/block}