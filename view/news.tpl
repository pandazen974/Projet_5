{extends file="view/template.tpl"}

{block name=titre}News{/block}


{block name=contenu}
    <div class="fullNews">
        <div class="fullImage">
            <img src="/Projet_5/public/css/images/{$oneNews->imageName()}" alt="{$oneNews->imageDescription()}">
        </div>
        <div class="fullText">
                <h3>{$oneNews->title()}</h3>
                <p>{$oneNews->content()}</p>
            <div class="link">
                <a href="index.php?action=modifyNews&amp;id={$oneNews->id()}" ><div>Editer</div></a>
                <a href="index.php?action=eraseNews&amp;id={$oneNews->id()}" ><div>Supprimer</div></a>
            </div>
        </div>
    </div>
{/block}