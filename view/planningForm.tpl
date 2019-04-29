{extends file="view/template.tpl"}

{block name=titre}Plannification{/block}
{block name=contenu}



<form action="index.php?action=addEvent" method="post">
<h3>Plannifier un cours </h3>
<label for="title">Sélectionner un cours:</label><br/>
    <select id="title" name="title">
        {foreach $classes as $class}<option value="{$class->title()}">{$class->teachingUnit()}:{$class->title()}</option>{/foreach}
    </select><br/>
    
<label for="teacher">Enseignant:</label><br/>
    <select id="teacher" name="teacher">
        {foreach $teachers as $teacher}<option value=" {$teacher->lastName()} {$teacher->firstName()}">{$teacher->lastName()} {$teacher->firstName()}</option>{/foreach}
    </select>
    
<label for="start">Début:</label><br/>
    <input class="datetimepicker"  type="text" name="start" >     
    
<label for="end">Fin:</label><br/>
    <input class="datetimepicker" type="text" name="end" >
       
    <input type="submit" class="form_button" value="Valider" />

</form>
{/block}
{block name=scripts}
    <script src='/Projet_5/public/lib/jquery.datetimepicker.full.js'></script> 
    <script src='/Projet_5/public/js/planningForm.js'></script>
{/block}