{extends file="view/template.tpl"}

{block name=titre}Accueil{/block}

{block name=contenu} <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="/Projet_5/public/css/images/img1.png" style="width:100%" alt="face lycée Estienne d'Orves">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="/Projet_5/public/css/images/img2.png" style="width:100%" alt="vue arrière lycée Estienne d'Orves">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="/Projet_5/public/css/images/img3.png" style="width:100%" alt="salle cdi lycée Estienne d'Orves">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="slider.plusSlides(-1);">&#10094;</a>
  <a class="next" onclick="slider.plusSlides(1);">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="slider.currentSlide(1);"></span>
  <span class="dot" onclick="slider.currentSlide(2);"></span>
  <span class="dot" onclick="slider.currentSlide(3);"></span>
</div> 

{foreach $allNews as $oneNews}
    <h3>{$oneNews->title()}</h3>
    <img src="/Projet_5/public/css/images/{$oneNews->imageName()}.png" alt="{$oneNews->imageDescription()}">
    <p>{$oneNews->imageDescription()}</p>
{/foreach}
{/block}

{block name=scripts}
   <script src='/Projet_5/public/js/slider.js'></script> 
{/block}

