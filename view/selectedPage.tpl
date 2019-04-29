{extends file="view/template.tpl"}

{block name=titre}{$selectedPage->pageName()}{/block}

{block name=contenu}
    <div class="page-content">
    {$selectedPage->content()}
    </div>
{/block}

