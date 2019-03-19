{extends file="view/template.tpl"}

{block name=titre}Connexion{/block}


{block name=contenu}
    <h3>Se connecter</h3>
  <form action="index.php?action=home" method="post">
    
    <label for="email">Email:</label><br/>
    <input type="text" name="email" />
    
    <label for="pass">Mot de passe:</label><br/>
    <input type="password" id="pass" name="pass" required title="11 caracteres minimum"><br/>
    <span>Première connexion, veuillez vous enregistrer:<a href="index.php?action=home">S'enregistrer</a></span>
    <input type="submit" value="Valider"/>
{/block}   
 