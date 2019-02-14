<?php $title = 'Cours'; ?>

<?php ob_start(); ?>
<form action="index.php?action=setClass" method="post">


    <label for="className">Nom du Cours:</label><br/>
    <input type="text" name="className" />

    
    <input type="submit" value="Valider" />



</form>

<?php $content = ob_get_clean(); ?>

<?php require("template.php"); 

