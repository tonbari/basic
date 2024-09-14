<?php 
use yii\bootstrap5\Html;
?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<style>
* { box-sizing: border-box; }

body { font-family: sans-serif; }

H1 { font-size: 230%;}
H5 { font-size: 120%; line-height: 2;}
H4 { text-align: left; line-height: 1.3;}
p { font-size: 120%; line-height: 2;}

.markers li::marker {
	color: #c0c0c0;
	font-size: 20px;
}
li{ line-height: 2; }
.container-card {
    display: grid;
    grid-template-columns: repeat(2, 600px);
    gap: 15px;
    text-align: left;
}
.card {
  border: none;
}
.buttn {
    display: inline-block;
    background: #78c2ad;
    color: #fff; 
    padding: 10px; 
    font-size: 140%;
    border-radius: 5px; 
    width: 700px;
    text-decoration: none;
    height: 70px;
    text-align: center;
   }
.container-1{padding-left: 250px;}
</style>
</section>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind('[data-fancybox]', {
      });    
</script>
<div class="jumbotron text-left bg-transparent mt-4 mb-4">
<h1>Из чего складывается цена</h1> 
<div class="container-list">
  <ul class="markers">
    <li><p class="text-dark">Сложность работы</p></li>
    <li><p class="text-dark">Требуемая точность копии</p> </li>
    <li><p class="text-dark">Размер копии</p> </li>
    <li><p class="text-dark">Сроки</p> </li>
    <li><p class="text-dark">Загруженность художника</p> </li>
</ul>  
</div>
<p>Каждый запрос клиента - индивидуален. Поэтому типичного прейскуранта художники не предоставляют.</p>
<h1>Примеры выполненных работ с ценами</h1>
<div class="container-card">
<div class="card">
    <div class="center-image">
        <a
        data-fancybox
        data-src="img/replic/522662@2x.webp" width="550px" height="290px"
        data-caption="Пляж в Портичи"
        >
        <img src="img/replic/522662@2x.webp" width="550px" height="290px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text">Пляж в Портичи</h4>
        <h6 class="card-text">Залимхан Марушев</h6>
            <p class="card-text">Мариано Фортуни-и-Карбо, 80х125см<br>Стоимость: 160 000 рублей</p>
        </div>
</div>   
<div class="card">
    <div class="center-image">
        <a
        data-fancybox
        data-src="img/replic/633984@2x.webp" width="550px" height="300px"
        data-caption="Эффект снега в Живерни"
        >
        <img src="img/replic/633984@2x.webp" width="550px" height="300px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text">Эффект снега в Живерни</h4>
        <h6 class="card-text">Залимхан Марушев</h6>
            <p class="card-text">Клод Моне, 65.4×92.7 см<br>Стоимость: 140 000 рублей</p>
        </div>
</div>
<div class="card">
    <div class="center-image">
        <a
        data-fancybox
        data-src="img/replic/522620@2x.webp" width="550px" height="300px"
        data-caption="Дети художника в японской гостиной"
        >
        <img src="img/replic/522620@2x.webp" width="550px" height="300px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text">Дети художника в японской гостиной</h4>
        <h6 class="card-text">Залимхан Марушев</h6>
            <p class="card-text">Мариано Фортуни-и-Карбо, 44 × 93 см<br>Стоимость: 210 000 рублей</p>
        </div>
</div>
<div class="card">
    <div class="center-image">
        <a
        data-fancybox
        data-src="img/replic/580720@2x.webp" width="550px" height="300px"
        data-caption="Два котенка в корзине"
        >
        <img src="img/replic/580720@2x.webp" width="440px" height="460px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text">Два котенка в корзине</h4>
        <h6 class="card-text">Юрий Замотин</h6>
            <p class="card-text">Генриетта Роннер-Книп, 23×19 см<br>Стоимость: 110 000 рублей</p>
        </div>
</div>
</div>
<div class="container-1">
    <p><?= Html::a('Узнать цену', ['crud/createpurchases'], ['class' => 'buttn']) ?></p>
</div>
</div>