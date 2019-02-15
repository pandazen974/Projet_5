{extends file="view/template.tpl"}

{block name=titre}Promotion{/block}

{block name=contenu}<form action="index.php?action=registerStudentsGroup&amp;id={$newUserProfile->userId()}" method="post">
<label for="promotion">Veuillez renseigner l'année d'inscription de l'étudiant:</label><br/>
<select name="promotion">
    <option value="1">1ère année</option>
    <option value="2">2ème année</option>
    <option value="3">3ème année</option>
</select>
    
    <input type="submit" value="Valider" />
</form>{/block}