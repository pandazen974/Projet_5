{extends file="view/template.tpl"}

{block name=titre}Enregistrement{/block}
{block name=contenu}



<form action="index.php?action=registerUser" method="post">
<h3>Enregistrer utilisateur</h3>

    <label for="lastName">Nom:</label><br/>
    <input type="text" name="lastName" />
    
    <label for="firstName">Prénom:</label><br/>
    <input type="text" name="firstName" />
    
    <label for="middleName">Autres prénoms:</label><br/>
    <input type="text" name="middleName" />
    
    <label for="address">Adresse:</label><br/>
    <input type="text" name="address" />
    
    <label for="city">Ville:</label><br/>
    <input type="text" name="city" />
    
    <label for="postalCode">Code postal:</label><br/>
    <input type="text" name="postalCode" />
    
    <label for="telNumber">Téléphone:</label><br/>
    <input type="tel" name="telNumber" />
    
    <label for="birth">Date de Naissance:</label><br/>
    <input type="date" name="birth" />
    
    <label for="email">Email:</label><br/>
    <input type="email" name="email"/>
    
    <label for="registrationDate">Date d'inscription:</label><br/>
    <input type="date" name="registrationDate"/>
    
    <input type="submit" class="form_button" value="Valider" />
    
</form>
{/block}