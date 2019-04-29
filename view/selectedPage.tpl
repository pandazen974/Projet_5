{extends file="view/template.tpl"}

{block name=titre}{$selectedPage->pageName()}{/block}

{block name=contenu}
    <div class="page-content">
    {$selectedPage->content()}
    </div>
{/block}

{block name=scripts}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{/block}