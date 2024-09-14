<?php

/** @var yii\web\View $this */

$this->title = "Casa dell'artista";
?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<style>
* { box-sizing: border-box; }
body { font-family: sans-serif; }
.carousel {
  background: #ffffff;
}
.carousel img {
  display: block;
  height: 200px;
}
@media screen and ( min-width: 768px ) {
  .carousel img {
    height: 600px;
  }
}
H1 { 
  font-size: 350%;
  } 
p { 
  font-size: 150%;
  line-height: 2;
  width: 90%;
  padding-left: 100px;
  }
h6 { 
  line-height: 2;
  width: 90%;
  padding-left: 100px;
  }
</style>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1>Casa dell'artista</h1>

        <h5 class="lead">Здесь живет искусство.</h5>

    </div>

<div class="body-content">
    
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<div class="carousel"
  data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
  <img src="img\replic\522620@2x.webp"/>
  <img src="img\replic\474417@2x.webp"/>
  <img src="img\1.jpg"/>
  <img src="img\misha.png"/>
  <img src="img\replic\86739@2x.webp"/>
  <img src="img\replic\580720@2x.webp"/>
  <img src="img\replic\182784@2x.webp"/>
  <img src="img\replic\164306@2x.webp"/>
  <img src="img\replic\522662@2x.webp"/>
</div>

<div class="jumbotron text-left bg-transparent mt-5 mb-5">
  <p class="text-dark">
  Искусство — это уникальное выражение человеческой души, способное возбуждать эмоции, вдохновлять и 
  заставлять задуматься. Оно может проявляться в различных формах: живописи, скульптуре, музыке, 
  литературе, танце и других видах творчества. 
  Искусство позволяет нам увидеть мир по-новому, раскрывает перед нами глубинные чувства и мысли художника. 
  Через него мы можем погрузиться в другую эпоху, пережить чужие радости и страдания, проникнуться красотой и 
  гармонией.
  </p>
<br>
<figure class="text-center">
  <blockquote class="blockquote">
    <p class="text-dark-emphasis">“Если бы я мог выразить это словами, не было бы причин рисовать”</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  Эдвард Хоппер
  </figcaption>
</figure>
    </div>
<br>
<h6>Контакты:</h6>
<p>
    <a href="mailto:mail@htmlacademy.ru" class="btn btn-outline-info">casadell-artista@yandex.ru</a>
    <a href="tel:+79895285788" class="btn btn-outline-info">+7 989 528-57-88</a>
    <button type="button" class="btn btn-outline-info">Телеграм</button>
    <button type="button" class="btn btn-outline-info">Вотсап</button>
    <button type="button" class="btn btn-outline-info">Ростов-на-Дону</button>
    <br>
</p>
    <h6>Наши соцсети:</h6>
<p>
    <button type="button" class="btn btn-outline-info">Вк</button>
    <button type="button" class="btn btn-outline-info">Телеграм</button>
</p>
    </div>
</div>


