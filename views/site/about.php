<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'О нас';
//$this->params['breadcrumbs'][] = $this->title;
?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<style type="text/css"> 
p { 
  font-size: 150%;
  line-height: 2;
  width: 80%;
  padding-left: 100px;
  }
H1 { 
  line-height: 2;
  padding-left: 100px;
}
.brif-section {
  justify-content: space-between;
  margin-top: 5px;
  margin-bottom: 5px;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 90px;
}
</style>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p class="text-dark">
    На нашем сайте вы сможете найти талантливых художников для заказа уникальных 
    произведений и иллюстраций. Наш поиск позволит вам подобрать художника исходя из 
    ваших предпочтений: стиля, тематики, цены и сроков выполнения заказа. От реалистичной живописи 
    до абстрактных работ, от иллюстраций до портретов – здесь каждый найдет то, что ищет.
    </p>
    <p class="text-dark">
    На нашем сайте также есть возможность заказать граффити и роспись стен в коммерческих помещениях. 
    Наши художники готовы превратить обычные стены в удивительные произведения искусства, 
    которые подчеркнут стиль вашего бизнеса и привлекут внимание клиентов. Мы предлагаем широкий выбор стилей 
    и тем, а также индивидуальный подход к каждому заказу. Придайте своему коммерческому помещению неповторимый 
    облик с помощью профессиональной росписи от наших художников.
    </p>
    <br>

<figure class="text-center">
  <blockquote class="blockquote">
    <p class="mb-0">“Творчество требует смелости”</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Анри Матисс 
  </figcaption>
</figure>

<p class="text-dark">Будьте смелыми вместе с нами!</p>


<section class="brif-section">
<a
  data-fancybox
  data-src="img\303.jpg"
  data-caption="Роспись стены"
>
  <img src="img\303.jpg" width="500" height="350" alt="" />
</a>
<a data-fancybox="gallery" href="img\replic\474417@2x.webp" data-caption="Водяные лилии, Клод Моне 1919">
  <img src="img\replic\474417@2x.webp" width="500" height="300" alt="" />
</a>
<div style="display:none">
  <a data-fancybox="gallery" href="img\replic\569619@2x.webp" data-caption="Четыре дерева, Клод Моне 1891">
    <img src="img\replic\569619@2x.webp" />
  </a>
  <a data-fancybox="gallery" href="img\replic\433425@2x.webp" data-caption="Профиль женщины (Жаклин), Пабло Пикассо 1969">
    <img src="img\replic\433425@2x.webp" />
  </a>
  <a data-fancybox="gallery" href="img\replic\86762@2x.webp" data-caption="Сюжет 144, Здзислав Бексиньский">
    <img src="img\replic\86762@2x.webp" />
  </a>
</div>
</section>
<section class="brif-section">
<a data-fancybox="gallery1" href="img\replic\580701@2x.webp" data-caption="Маленький злой котенок, Генриетта Роннер-Книп XIX век">
  <img src="img\replic\580701@2x.webp" width="400" height="500" alt="" />
</a>
<div style="display:none">
  <a data-fancybox="gallery1" href="img\replic\86737@2x.webp" data-caption="Сюжет 84, Здзислав Бексиньский"> 
    <img src="img\replic\86737@2x.webp" />
  </a>
  <a data-fancybox="gallery1" href="img\replic\334340@2x.webp" data-caption="Море, Иван Константинович Айвазовский
  1882">
    <img src="img\replic\334340@2x.webp" />
  </a>
  <a data-fancybox="gallery1" href="img\replic\579133@2x.webp" data-caption="Король леса, Роза Бонёр 1897">
    <img src="img\replic\579133@2x.webp" />
  </a>
</div>
<a data-fancybox="gallery2" href="img\misha1.jpg" data-caption="Роспись стен в офисе по эскизам Миши Моста в Сколково">
  <img src="img\misha1.jpg" width="600" height="400" alt="" />
</a>
<div style="display:none">
  <a data-fancybox="gallery2" href="img\misha.png">
    <img src="img\misha.png" />
  </a>
  <a data-fancybox="gallery2" href="img\misha2.png">
    <img src="img\misha2.png" />
  </a>
  <a data-fancybox="gallery2" href="img\misha3.png">
    <img src="img\misha3.png" />
  </a>
</div>
</section>
<section class="brif-section">
<a
  data-fancybox
  data-src="img\replic\522662@2x.webp"
>
  <img src="img\replic\522662@2x.webp" width="600" height="400" alt="" />
</a>
<a
  data-fancybox
  data-src="img\replic\182784@2x.webp"
>
  <img src="img\replic\182784@2x.webp" width="350" height="500" alt="" />
</a>
</section>
<section class="brif-section">
<a
  data-fancybox
  data-src="img\illusrtation\cj-park-lee-4k.jpg"
>
  <img src="img\illusrtation\cj-park-lee-4k.jpg" width="600" height="400" alt="" />
</a>
<a
  data-fancybox
  data-src="img\illusrtation\vadim-koval-random50-1.jpg"
>
  <img src="img\illusrtation\vadim-koval-random50-1.jpg" width="500" height="300" alt="" />
</a>
</section>
<section class="brif-section">
<a
  data-fancybox
  data-src="img\illusrtation\vadim-koval-random67.jpg"
>
  <img src="img\illusrtation\vadim-koval-random67.jpg" width="900" height="400" alt="" />
</a>
</section>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind('[data-fancybox]', {
      });    
</script>
</div>
