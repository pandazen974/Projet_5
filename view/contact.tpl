{extends file="view/template.tpl"}

{block name=titre}Contacts{/block}


{block name=contenu}
<div id="contact-container">
    <div id="contact-form">
        <form action="index.php?action=contactAdmin" method="post">
            <h3>Nous contacter:</h3>
            <label for="email">Email:</label><br/>
            <input type="text" name="email" required placeholder="Votre email" />
            
            <label for="object">Objet:</label><br/>
            <input type="text" name="object" required placeholder="Votre objet"  />
    
            <label for="message">Votre message:</label><br/>
            <textarea id="message" name="message" required placeholder="Votre message"></textarea>
    
    
            {if isset($error)}<p>{$error}</p>{else $error eq 'null'}{/if}
            {if isset($checked)}<p>{$checked}</p>{else $checked eq 'null'}{/if} 
            <input type="submit" class='form_button' value="Valider"/>
        </form>
    </div>
    <div id="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.527141661482!2d7.246164650510965!3d43.69959305734607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd0115aeec977%3A0x295d5e5b1db40505!2sLyc%C3%A9e+Honor%C3%A9+d&#39;Estienne+d&#39;Orves!5e0!3m2!1sfr!2sfr!4v1556385276970!5m2!1sfr!2sfr" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
{/block} 