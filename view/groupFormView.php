<?php $title = 'Groupe'; ?>

<?php ob_start(); ?>
<form action="index.php?action=registerUsersGroup" method="post">
<label for="group">Attribuer un groupe à un étudiant:</label><br/>
<select name="group">
    <option value="1">Groupe 1</option>
    <option value="2">Groupe 2</option>
    <option value="3">Groupe 3</option>
     <option value="3">Groupe 4</option>
</select>
    <input type="submit" value="Valider" />



</form>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); 

