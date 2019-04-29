{extends file="view/template.tpl"}

{block name=titre}News{/block}


{block name=contenu}
    <div class="fullNews">
        <div class="fullImage">
            <img src="/Projet_5/public/css/images/{$oneNews->imageName()}" alt="{$oneNews->imageDescription()}">
        </div>
        <div class="fullText">
                <h4>{$oneNews->title()}</h4>
                <p>{$oneNews->content()}</p>
            {if (!empty($smarty.session.user))}
            <div class="link">
                {if in_array(3,$smarty.session.user)}<a href="index.php?action=openUpdateNewsForm&amp;id={$oneNews->id()}" ><div>Editer</div></a>{/if}
                {if in_array(4,$smarty.session.user)}<a href="index.php?action=eraseNews&amp;id={$oneNews->id()}" ><div>Supprimer</div></a>{/if}
            </div>
            {/if}
        </div>
    </div>
{/block}

