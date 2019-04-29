{extends file="view/template.tpl"}

{block name=titre}Mise à jour utilisateur{/block}
{block name=contenu}



<form action="index.php?action=modifyUser&amp;id={$user->id()}" method="post">
    <h3>Mise à jour utilisateur</h3>

    <label for="lastName">Nom:</label><br/>
    <input type="text" name="lastName" value="{$user->lastName()}" />
    
    <label for="firstName">Prénom:</label><br/>
    <input type="text" name="firstName" value="{$user->firstName()}" />
    
    <label for="middleName">Autres prénoms:</label><br/>
    <input type="text" name="middleName" value="{$user->middleName()}" />
    
    <label for="address">Adresse:</label><br/>
    <input type="text" name="address" value="{$user->address()}" />
    
    <label for="city">Ville:</label><br/>
    <input type="text" name="city" value="{$user->city()}" />
    
    <label for="postalCode">Code postal:</label><br/>
    <input type="text" name="postalCode" value="{$user->postalCode()}"  />
    
    <label for="telNumber">Téléphone:</label><br/>
    <input type="tel" name="telNumber" value="{$user->telNumber()}" />
    
    <label for="birth">Date de Naissance:</label><br/>
    <input type="date" name="birth" value="{$user->birth()}" />
    
    <label for="email">Email:</label><br/>
    <input type="email" name="email" value="{$user->email()}"/>
    
    <label for="registrationDate">Date d'inscription:</label><br/>
    <input type="date" name="registrationDate" value="{$user->registrationDate()}"/>
    
    <input type="submit" class="form_button" value="Valider" />

</form>
{/block}

{block name=scripts}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{/block}