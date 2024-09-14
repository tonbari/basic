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
<p>Для того чтобы узнать стоимость иллюстрации Вы можете заполнить форму ниже</p>
<div class="container-1">
    <p><?= Html::a('Узнать цену', ['crud/createpurchases'], ['class' => 'buttn']) ?></p>
</div>
<h1>Примеры выполненных работ с ценами</h1>
<div class="container-card">
<div class="card">
    <div class="center-image">
        <a
        data-fancybox
        data-src="img/illusrtation/dmitriy-polynkov-got.jpg" width="550px" height="290px"
        data-caption="Summoning"
        >
        <img src="img/illusrtation/dmitriy-polynkov-got.jpg" width="550px" height="290px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text">Summoning</h4>
        <h6 class="card-text">Dmitriy Polynkov</h6>
            <p class="card-text">Стоимость: 12 000 рублей</p>
        </div>
</div>   
<div class="card">
    <div class="center-image">
        <a
        data-fancybox
        data-src="img/illusrtation/cj-park-lee-4k.jpg" width="550px" height="300px"
        data-caption="Mushroom Village"
        >
        <img src="img/illusrtation/cj-park-lee-4k.jpg" width="550px" height="300px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text">Mushroom Village</h4>
        <h6 class="card-text">CJ.Park Lee</h6>
            <p class="card-text">Стоимость: 25 000 рублей</p>
        </div>
</div>
<div class="card">
    <div class="center-image">
        <a
        data-fancybox
        data-src="img/illusrtation/vadim-koval-random58.jpg" width="550px" height="300px"
        data-caption="Fantasy Landscape 1"
        >
        <img src="img/illusrtation/vadim-koval-random58.jpg" width="550px" height="300px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text">Fantasy Landscape 1</h4>
        <h6 class="card-text">Вадим Коваль</h6>
            <p class="card-text">Стоимость: 9000 рублей</p>
        </div>
</div>
</div>
</div>