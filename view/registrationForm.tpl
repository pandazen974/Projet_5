{extends file="view/template.tpl"}

{block name=titre}S'enregistrer{/block}


{block name=contenu}
    <h3>Se connecter</h3>
  <form action="index.php?action=home" method="post">
    
    <label for="email">Email:</label><br/>
    <input type="text" name="email" />
    
    <label for="pass">Mot de passe:</label><br/>
    <input type="password" id="pass" name="pass" required title="11 caracteres minimum"><br/>
    
    <label for="pass">Mot de passe:</label><br/>
    <input type="password" id="pass" name="pass" required title="11 caracteres minimum"><br/>
    
{/block}   