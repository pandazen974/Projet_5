{extends file="view/template.tpl"}

{block name=titre}Suppression profil{/block}

{block name=contenu}<form action="index.php?action=eraseProfileRights" method="post">
<label for="profile">Supprimer un profil:</label><br/>
<select name="profile">
    {foreach $profiles as $profile}
    <option value={$profile->id()}>{$profile->profileName()}</option>
    {/foreach}
</select>
    
    <input type="submit" class="form_button" value="Valider" />
</form>
{/block}

{block name=scripts}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{/block}