{extends file="view/template.tpl"}

{block name=titre}Attribution planning{/block}
{block name=contenu}<h3>Attribuer un cours à un groupe </h3>

<form action="index.php?action=registerGroupPlanning" method="post">
  
<label for="groupName">:</label><br/>
    <select name="groupName">
    {foreach $groups as $group}<option value="{$group->id()}">{$group->groupName()}({$group->promotion()})</option>{/foreach}
    </select>
   
    <input type="hidden" name="planningId" value="{$newPlanning->id()}">
    <input type="submit" value="Valider" />

</form>
    
{/block}