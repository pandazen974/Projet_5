{extends file="view/template.tpl"}

{block name=titre}Connexion{/block}


{block name=contenu}
    
  <form action="index.php?action=openSession" method="post">
    <h3>Se connecter</h3>
    <label for="email">Email:</label><br/>
    <input type="text" name="email" />
    
    <label for="pass">Mot de passe:</label><br/>
    <input type="password" id="password" name="password"><br/>
    
    
    <span>Première connexion, veuillez vous enregistrer:<a href="index.php?action=openCheckInForm">S'enregistrer</a></span>
    {if isset($erreur)}<p>{$erreur}</p>{else $erreur eq 'null'}{/if}
    <input type="submit" class='form_button' value="Valider"/>
  </form>
{/block}   
 