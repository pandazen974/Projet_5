{extends file="view/template.tpl"}

{block name=titre}Attribution planning{/block}
{block name=contenu}

<form action="index.php?action=registerGroupPlanning" method="post">
  <h3>Attribuer un cours à un groupe </h3>
<label for="groupName"></label><br/>
    <select name="groupName">
    {foreach $groups as $group}<option value="{$group->id()}">{$group->groupName()}({$group->promotion()})</option>{/foreach}
    </select>
   
    <input type="hidden" name="planningId" value="{$newPlanning->id()}">
    <input type="submit" class="form_button" value="Valider" />

</form>
    
{/block}

{block name=scripts}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{/block}