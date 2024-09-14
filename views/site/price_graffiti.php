<style>
* { box-sizing: border-box; }

body { font-family: sans-serif; }

H1 { font-size: 230%;}
H5 { font-size: 120%; line-height: 2;}
H4 { text-align: left; line-height: 1.3;}
p { font-size: 110%; line-height: 2;}
TABLE { border-collapse: collapse; width: 1200px;}
TH, TD { text-align: center; width: 700px;}
TH {
    height: 100px; 
    width: 700px;
    text-align: center;
    padding: 0; 
   }
.markers li::marker {
	color: #c0c0c0;
	font-size: 20px;
}
li{ line-height: 2; }
.container-card {
    display: grid;
    grid-template-columns: repeat(5, 250px);
    gap: 15px;
    text-align: left;
}
.card {
  border: none;
  width: 250px;
}
.card-img-top{
    width: 250px;
    height: 140px;
}
.t-text {
    font-family: 'GraphikTT', Arial, sans-serif;
    font-weight: 300;
}
.t431__table {
    font-family: 'GraphikTT',Arial,sans-serif;
    font-weight: 300;
    color: #000000;
    line-height: 2.5;
    font-size: 18px;
    box-sizing: content-box;
    margin: 20px;
    padding: 20px;
    border: 0 solid #ccc;
    vertical-align: baseline;
    text-align: inherit;
    border-collapse: collapse;
    width: 100%;
    table-layout: auto;
}
.t431__evenrow {
    padding: 3px;
    border-bottom: 1px solid #c0c0c0; 
    border-top: 1px solid #c0c0c0;
}
.t431__thead {
    padding: 3px;
    border-bottom: 1px solid #c0c0c0; 
}
</style>
<div class="jumbotron text-left bg-transparent mt-4 mb-4">
<h1>Из чего складывается цена</h1> 
<table>
<tr>
    <th><h5>Стоимость и тип используемых материалов</h5></th>
    <th><h5>Стилистика оформления и разработка эскиза</h5></th>
    <th><h5>Время на реализацию проекта</h5></th>
</tr>
<tr>
    <td><img src="img/paint.png" width="90px" height="90px"></td>
    <td><img src="img/picture.png" width="100px" height="100px"></td>
    <td><img src="img/clock.png" width="100px" height="100px"></td>
</tr>    
</table>
<br><br>
<h1>Условиями ценообразования являются</h1>
<div class="container">
  <ul class="markers">
    <li><p class="text-dark">Сложность и стилистика росписи реализуемого эскиза.</p></li>
    <li><p class="text-dark">Срочность реализации проекта.</p> </li>
    <li><p class="text-dark">Объём необходимых подготовительных работ.</p> </li>
    <li><p class="text-dark">Коэффициент за высотные работы.</p> </li>
    <li><p class="text-dark">Коэффициент за ночной график проведения работ.</p> </li>
    <li><p class="text-dark">Тип используемых материалов.</p> </li>
    <li><p class="text-dark">Географическое расположение объекта оформления.</p> </li>
    <li><p class="text-dark">Использование спецтехники и спецоборудования.</p></li>
</ul>  
</div>
<br>
<h1>Стоимость работ по росписи за квадратный метр</h1>
<h5 class="text-body-secondary">По типу детализации и технике выполнения</h5>
<div class="container-card">
<div class="card">
  <img src="img\__9.jpg" width="220px" height="120px" class="card-img-top">
  <div class="card-body">
    <p class="card-text"><h4 class="text-secondary-emphasis">Простая роспись<br>1*</h4>
    <h6>Силуэтные изображения, мультипликационные персонажи, шрифты. 
    Небольшое количество цветов.</h6></p>
  </div>
</div>
<div class="card">
  <img src="img\__8.jpg" width="220px" height="120px" class="card-img-top">
  <div class="card-body">
    <p class="card-text"><h4 class="text-secondary-emphasis">Невысокая детализация<br>2**</h4>
    <h6>Стилизованные иллюстрации, абстракции, граффити со средним уровнем детализации.</h6></p>
  </div>
</div>
<div class="card">
  <img src="img\__7.jpg" width="220px" height="120px" class="card-img-top">
  <div class="card-body">
    <p class="card-text"><h4 class="text-secondary-emphasis">Оптимальная детализация<br>3***</h4>
    <h6>Смешанная техника нанесения, подходит для авторской иллюстрации, росписи акрилом, и 
    большинства изображений.</h6></p>
  </div>
</div>
<div class="card">
  <img src="img\__6.jpg" width="220px" height="120px" class="card-img-top">
  <div class="card-body">
    <p class="card-text"><h4 class="text-secondary-emphasis">Высокая детализация<br>4****</h4>
    <h6>Живопись, техника, архитектура. Выполняется аэрозолью и кистями, c применением аэрографии.</h6></p>
  </div>
</div>
<div class="card">
  <img src="img\__5.jpg" width="220px" height="120px" class="card-img-top">
  <div class="card-body">
    <p class="card-text"><h4 class="text-secondary-emphasis">Реалистичная роспись<br>5*****</h4>
    <h6>Реализм. Лица, люди, оптические иллюзии. Выполняется аэрографом и кистями.</h6></p>
  </div>
</div>
</div>

<table class="t431__table t431__withoutleftpadding" data-table-width="20%;16%;16%;16%;16%;16%" width="100%">
    <thead class="t431__thead">
        <tr>
            <th class="t431__th t-title" width="20%">Площадь / уровень сложности</th>
            <th class="t431__th t-title" width="16%">1*</th>
            <th class="t431__th t-title" width="16%">2**</th>
            <th class="t431__th t-title" width="16%">3***</th>
            <th class="t431__th t-title" width="16%">4****</th>
            <th class="t431__th t-title" width="16%">5*****</th>
        </tr>
    </thead>
    <tbody class="t431__tbody"><tr class="t431__oddrow">
        <td class="t431__td t-text" width="20%">до 10 м²</td>
        <td class="t431__td t-text" width="16%"> 1500 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 2000 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 3000 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 3500 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 6500 ₽/м²</td>
    </tr>
    <tr class="t431__evenrow">
        <td class="t431__td t-text" width="20%">до 25 м²</td>
        <td class="t431__td t-text" width="16%"> 1400 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 1700 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 2500 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 3000 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 5500 ₽/м²</td>
    </tr>
    <tr class="t431__oddrow">
        <td class="t431__td t-text" width="20%">до 50 м²</td>
        <td class="t431__td t-text" width="16%"> 1200 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 1300 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 2000 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 2500 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 4500 ₽/м²</td>
    </tr>
    <tr class="t431__evenrow">
        <td class="t431__td t-text" width="20%">до 100 м²</td>
        <td class="t431__td t-text" width="16%"> 900 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 1000 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 1700 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 2200 ₽/м²</td>
        <td class="t431__td t-text" width="16%"> 4000 ₽/м²</td>
</tr>
<tr class="t431__oddrow">
    <td class="t431__td t-text" width="20%">до 250 м²</td>
    <td class="t431__td t-text" width="16%"> 900 ₽/м²</td>
    <td class="t431__td t-text" width="16%"> Рассчитывается индивидуально</td>
    <td class="t431__td t-text" width="16%"> 1300 ₽/м²</td>
    <td class="t431__td t-text" width="16%"> Рассчитывается индивидуально</td>
    <td class="t431__td t-text" width="16%"> Рассчитывается индивидуально</td>
</tr>
<tr class="t431__evenrow">
    <td class="t431__td t-text" width="20%">от 250 м²</td>
    <td class="t431__td t-text" width="16%"> 800 ₽/м²</td>
    <td class="t431__td t-text" width="16%"> Рассчитывается индивидуально</td>
    <td class="t431__td t-text" width="16%"> Рассчитывается индивидуально</td>
    <td class="t431__td t-text" width="16%"> Рассчитывается индивидуально</td>
    <td class="t431__td t-text" width="16%"> Рассчитывается индивидуально</td>
</tr>
</tbody>
</table>