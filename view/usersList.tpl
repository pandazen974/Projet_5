{extends file="view/template.tpl"}

{block name=titre}Liste Utilisateurs{/block}
{block name=contenu}<h3>Lister utilisateurs</h3>
    
<table id="table_id" class="display cell-border order-column stripe">
    <a href="index.php?action=openUserForm"><button><i class="fas fa-user-plus"></i>Ajouter</button></a>
    <thead>
        <tr>
            <th>Id</th>
     
            <th>Nom</th>

            <th>Prénom</th>

            <th>Autres noms</th>
       
            <th>Adresse</th>
       
            <th>Ville</th>
       
            <th>Code postal</th>
       
            <th>Numéro de Téléphone</th>
       
            <th>Né le</th>
       
            <th>Email</th>
       
            <th>Inscrit le</th>
            
            <th>Editer</th>
            
            <th>Supprimer</th>

        </tr>
   </thead>
    <tbody>
{foreach $users as $user}
   
        <tr>
            <td>{$user->id()}</td>

            <td>{$user->lastName()}</td>

            <td>{$user->firstName()}</td>

            <td>{$user->middleName()}</td>
       
            <td>{$user->address()}</td>

            <td>{$user->city()}</td>
       
            <td>{$user->postalCode()}</td>
       
            <td>{$user->telNumber()}</td>
       
            <td>{$user->birth()}</td>
       
            <td>{$user->email()}</td>
       
            <td>{$user->registrationDate()}</td>
            
            <td><a href="index.php?action=openUserUpdateForm&amp;id={$user->id()}"><span style='color:rgba(25, 181, 254, 1)'><i class="fas fa-edit"></i></span></a></td>
            
            <td><a href="index.php?action=eraseUser&amp;id={$user->id()}"><span style='color:rgba(249, 105, 14, 1)'><i class="fas fa-trash"></i></span></a></li></td>
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

