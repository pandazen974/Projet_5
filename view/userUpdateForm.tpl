{extends file="view/template.tpl"}

{block name=titre}Mise à jour utilisateur{/block}
{block name=contenu}<h3>Mise à jour utilisateur</h3>*



<form action="index.php?action=modifyUser&amp;id={$user->id()}" method="post">


    <label for="lastName">Nom:</label><br/>
    <input type="text" name="lastName" placeholder="{$user->lastName()}" />
    
    <label for="firstName">Prénom:</label><br/>
    <input type="text" name="firstName" placeholder="{$user->firstName()}" />
    
    <label for="middleName">Autres prénoms:</label><br/>
    <input type="text" name="middleName" placeholder="{$user->middleName()}" />
    
    <label for="address">Adresse:</label><br/>
    <input type="text" name="address" placeholder="{$user->address()}" />
    
    <label for="city">Ville:</label><br/>
    <input type="text" name="city" placeholder="{$user->city()}" />
    
    <label for="postalCode">Code postal:</label><br/>
    <input type="text" name="postalCode" placeholder="{$user->postalCode()}"  />
    
    <label for="telNumber">Téléphone:</label><br/>
    <input type="tel" name="telNumber" placeholder="{$user->telNumber()}" />
    
    <label for="birth">Date de Naissance:</label><br/>
    <input type="date" name="birth" placeholder="{$user->birth()}" />
    
    <label for="email">Email:</label><br/>
    <input type="email" name="email" placeholder="{$user->email()}"/>
    
    <label for="registrationDate">Date d'inscription:</label><br/>
    <input type="date" name="registrationDate" placeholder="{$user->registrationDate()}"/>
    
    <input type="submit" value="Valider" />

</form>
{/block}