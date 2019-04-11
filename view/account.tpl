{extends file="view/template.tpl"}

{block name=titre}Validation{/block}
{block name=contenu}<h3>Comptes en attente</h3>
<table id="table_id" class="display cell-border order-column stripe">
    <thead>
        <tr>
            <th>Id</th>
     
            <th>Nom</th>

            <th>Prénom</th>

            <th>Autres noms</th>
       
            <th>Email</th>
            
            <th>Inscrit le</th>
       
            <th>Valider</th>
            
            <th>Rejetter</th>

          </tr>
   </thead>
    <tbody>
{foreach $users as $user}
   
        <tr>
            <td>{$user->id()}</td>

            <td>{$user->lastName()}</td>

            <td>{$user->firstName()}</td>

            <td>{$user->middleName()}</td>
       
            <td>{$user->email()}</td>
       
            <td>{$user->registrationDate()}</td>
            
            <td><a href="index.php?action=confirmAccount&amp;id={$user->id()}"><span style='color:rgba(63, 195, 128, 1)'><i class="fas fa-check-circle"></i></span></a></td>
            
            <td><a href="index.php?action=rejectAccount&amp;id={$user->id()}"><span style='color:rgba(242, 38, 19, 1)'><i class="fas fa-ban"></i></span></a></li></td>
        </tr>
    
{/foreach}
</tbody>
</table>
{/block}
{block name=scripts}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https:////cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"></script>
<script src="/Projet_5/public/js/datatable.js"></script>
{/block}