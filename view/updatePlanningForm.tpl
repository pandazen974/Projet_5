{extends file="view/template.tpl"}

{block name=titre}Modification planning{/block}
{block name=contenu}<h3>Modifier un cours</h3>



<form action="index.php?action=modifyPlanning&amp;id={$planning->id()}" method="post">
    
<label for="groupName">Réattribuer un groupe</label><br/>
    <select name="groupName">
    {foreach $groups as $group}<option value="{$group->id()}">{$group->groupName()}({$group->promotion()})</option>{/foreach}
    </select>
   

<label for="title">Choisir un autre cours:</label><br/>

    <select id="title" name="title">
        {foreach $classes as $class}<option value="{$class->title()}">{$class->teachingUnit()}:{$class->title()}</option>{/foreach}  
    </select><br/>
    
<label for="teacher">Enseignant:</label><br/>
    <select id="teacher" name="teacher">
        {foreach $teachers as $teacher}<option value=" {$teacher->lastName()} {$teacher->firstName()}">{$teacher->lastName()} {$teacher->firstName()}</option>{/foreach}
    </select>
    
<label for="start">Début:</label><br/>
    <input class="datetimepicker" value="{$planning->start()}" type="text" name="start" >     
    
<label for="end">Fin:</label><br/>
    <input class="datetimepicker" value="{$planning->end()}" type="text" name="end" >
    
    
        
    <input type="submit" value="Valider" />

</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='/Projet_5/public/lib/jquery.datetimepicker.full.js'></script> 
    <script src='/Projet_5/public/js/planningForm.js'></script> 
{/block}