{extends file="view/template.tpl"}

{block name=titre}Validation{/block}
{block name=contenu}<h3>Comptes en attente</h3>
<table id="account" class="display cell-border order-column stripe">
    <thead>
        <tr>
     
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

            <td>{$user->lastName()}</td>

            <td>{$user->firstName()}</td>

            <td>{$user->middleName()}</td>
       
            <td>{$user->email()}</td>
       
            <td>{$user->registrationDate()}</td>
            
            <td><a href="index.php?action=confirmAccount&amp;id={$user->id()}"><span style='color:rgba(63, 195, 128, 1)'><i class="fas fa-check-circle"></i></span></a></td>
            
            <td><button class="push"><span style='color:rgba(242, 38, 19, 1)'><i class="fas fa-ban"></i></span></a></button></td>
        </tr>
    
{/foreach}
</tbody>
<div id="myModaltwo" class="modal">

  <div class="modal-content">
    <span class="shut">&times;</span>
    <p>Voulez vous supprimer cet utilisateur?</p>
    <a href="index.php?action=rejectAccount&amp;id={$user->id()}"><button class="form_button">Supprimer</button></a>
  </div>

</div>
</table>
{/block}
{block name=scripts}
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" charset="utf8" src="https:////cdn.datatables.net/plug-ins/1.10.19/i18n/French.json"></script>
<script src="/Projet_5/public/js/datatable.js"></script>
<script src="/Projet_5/public/js/modal2.js"></script>
{/block}