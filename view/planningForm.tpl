{extends file="view/template.tpl"}

{block name=titre}Plannification{/block}
{block name=contenu}<h3>Plannifier un cours </h3>



<form action="index.php?action=addEvent" method="post">

    <input type="hidden" name="id" value=""/><br/>
     <label for="title">Nom du Cours:</label><br/>
     <input type="text" name ="title" />
    <label for="start">Début:</label><br/>
     <input class="datetimepicker" type="text" name="start" >     
    
    <label for="end">Fin:</label><br/>
        <input class="datetimepicker" type="text" name="end" >

    <input type="submit" value="Valider" />

</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='/Projet_5/public/lib/jquery.datetimepicker.full.js'></script> 
    <script src='/Projet_5/public/js/planningForm.js'></script> 
{/block}