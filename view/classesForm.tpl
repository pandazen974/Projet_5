{extends file="view/template.tpl"}

{block name=titre}Création cours{/block}
{block name=contenu}<h3>Créer un cours </h3>*



<form action="index.php?action=setClass" method="post">


    <label for="className">Intitulé du cours:</label><br/>
    <input type="text" name="className" />
    

    
    <input type="submit" value="Valider" />

</form>
{/block}
