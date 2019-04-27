{extends file="view/template.tpl"}

{block name=titre}Création Droits{/block}

{block name=contenu}
     <form id="case" action="index.php?action=addProfileRights&amp;id={$newProfile->id()}" method="post">
        <h3>Sélection des droits</h3>
        <table  class="table-rights display cell-border order-column stripe">  
   
     
    {foreach $allRights as $right}
        <tr><td><label for="case">{$right->rightName()}:</label></td><td><input type="checkbox" name='cases[]' value="{$right->id()}" /></td></tr>
    {/foreach}
   
    
    
        </table>
    <input type="submit" class="form_button" value="Valider" />
   </form>

{/block}

