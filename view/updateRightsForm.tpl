{extends file="view/template.tpl"}

{block name=titre}Mettre à jour les droits{/block}

{block name=contenu}
     <form action="index.php?action=modifyProfileRights&amp;id={$smarty.post.profile}" method="post">
     <h3>Mise à jour des droits</h3>
     <table class="table-rights display cell-border order-column stripe">  
   
     
    {foreach $allRights as $right}
        <tr><td><label for="case">{$right->rightName()}:</label></td><td><input{foreach $cases as $case} {if in_array($right->id(),$case)}checked{/if}{/foreach} type="checkbox" name='newRights[]' value="{$right->id()}" /></td></tr>
    {/foreach}
   
    
    
      </table>
        <input type="submit" class="form_button" value="Valider" />
   </form>

{/block}