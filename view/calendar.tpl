{extends file="view/template.tpl"}

{block name=titre}EDT{/block}



{block name=contenu}
  
<div id="calendar">
   <div id="modal">
        <div id="eventOptions">
            <div class="modal-header">
               <span id="close">&times;</span>
               <h2>Cours:</h2><p id="title"><p>
            </div>
            <div class="modal-body">    
                <a href="" id="delete_link"><button id="delete" class="fc-addButton-button ui-button ui-state-default ui-corner-left ui-corner-right"><span class="ui-icon ui-icon-trash"></span>Supprimer</button></a>
                <a href="" id="edit_link"><button id="edit" class="fc-addButton-button ui-button ui-state-default ui-corner-left ui-corner-right"><span class="ui-icon ui-icon-pencil"></span>Modifier</button></a>   
            </div> 
    
         </div>
    </div>
</div>

 {/block}   
 
 {block name=scripts}
<script src='/Projet_5/public/lib/jquery.min.js'></script>
<script src='/Projet_5/public/lib/moment.min.js'></script>
<script src='/Projet_5/public/lib/fullcalendar.js'></script>
<script src='/Projet_5/public/lib/locale/fr.js'></script>
<script src='/Projet_5/public/js/calendar.js'></script>
{/block}