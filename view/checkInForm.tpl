{extends file="view/template.tpl"}

    {block name=titre}Création mot de passe{/block}


{block name=contenu}
    <h3>Créer votre mot de passe</h3>
  <form action="index.php?action=createPassword" method="post">
    
    <label for="email">Email:</label><br/>
    <input type="text" name="email" />
    
    <label for="email">Mot de passe:</label><br/>
    <input type="password" name="password" />
    
    <label for="email">Confirmation:</label><br/>
    <input pattern=".{literal}{8,}{/literal}"   required title="8 caracteres minimum" type="password" name="password2" />
    
     <div class="g-recaptcha" data-sitekey="6LcPSJoUAAAAAKcP08QpSZ4xkJ5SH5USntEmmMG4">    
     </div>
    {if isset($error)}<p>{$error}</p>{else $error eq 'null'}{/if}
    <input type="submit" value="Valider"/>
  </form>
{/block} 
