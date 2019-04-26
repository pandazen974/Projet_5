{extends file="view/template.tpl"}

{block name=titre}Accueil{/block}

{block name=contenu} 
<div class="slideshow-container">

  
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="/Projet_5/public/css/images/img1.png" style="width:100%" alt="face lycée Estienne d'Orves">
    <div class="text">Lycée Honoré d'Estienne d'Orves</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="/Projet_5/public/css/images/img2.png" style="width:100%" alt="vue arrière lycée Estienne d'Orves">
    <div class="text">Cour du lycée</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="/Projet_5/public/css/images/img3.png" style="width:100%" alt="salle cdi lycée Estienne d'Orves">
    <div class="text">Espace bibliothèque</div>
  </div>

 
  <a class="prevs" onclick="slider.plusSlides(-1);">&#10094;</a>
  <a class="nexts" onclick="slider.plusSlides(1);">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="slider.currentSlide(1);"></span>
  <span class="dot" onclick="slider.currentSlide(2);"></span>
  <span class="dot" onclick="slider.currentSlide(3);"></span>
</div> 

<h2 id="news-title">Actualités</h2>
<div class="container">
    

{foreach $allNews as $oneNews}
    <div class="newsBox">
        <div class="imagesBox">
            <img src="/Projet_5/public/css/images/{$oneNews->imageName()}" alt="{$oneNews->imageDescription()}">
        </div>
        <div class="newstext">
            <h4>{$oneNews->title()}</h4>
            <p>{substr($oneNews->content(), 0,150 )}...</p>
            <a href="index.php?action=readOneNews&amp;id={$oneNews->id()}" >Lire la suite</a>
        </div>
    </div>
{/foreach}
</div>
<div id="paging">
    {if ($page > 1)}
    <a href="?page={$page - 1}">Page précédente</a>
    {/if}
    {for $i = 1; $i <= $totalPages; $i++}
    <a href="?page={$i}">{$i}</a>
    {/for}
    {if ($page < $totalPages)}
    <a href="?page={$page + 1}">Page suivante</a>{/if}
</div>
{/block}

{block name=scripts}
   <script src='/Projet_5/public/js/slider.js'></script> 
   <script 
{/block}

