{extends file="view/template.tpl"}

{block name=titre}Plannification{/block}
{block name=contenu}<h3>Plannifier un cours </h3>



<form action="index.php?action=addEvent" method="post">

 <label for="title">Sélectionner un cours:</label><br/>
     <select id="title" name="title">
        {foreach $classes as $class}<option value="{$class->title()}">{$class->teachingUnit()}:{$class->title()}</option>{/foreach}
    </select><br/>
    
<label for="userId">Enseignant:</label><br/>
    <select id="teacher" name="userId">
        {foreach $teachers as $teacher}<option value="{$teacher->id()}">{$teacher->lastName()} {$teacher->firstName()}</option>{/foreach}
    </select>
    
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