<?php
use yii\helpers\Html;
?>
<style>
    p{font-size: 130%;}
</style>
<div class="alert alert-dismissible alert-success">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Ваша заявка отправлена!</strong> Мы свяжемся с вами в течение следующих 48 часов.
</div>
<table width="100%" cellspacing="0" cellpadding="10">
<tr> 
</td>
<td valign="top">
    <h4>Вы ввели следующую информацию:</h4>
    <p><strong><label>Художник</label></strong> <?= Html::encode($artistname['artist_name']) ?></p>
    <p><strong><label>Ваше имя</label></strong>: <?= Html::encode($model->client_name) ?></p>
    <p><strong><label>Email</label></strong>: <?= Html::encode($model->email) ?></p>
    <p><strong><label>Номер телефона</label></strong>: <?= Html::encode($model->phone_number) ?></p>
    <p><strong><label>Опишите в общих чертах какого рода работу хотели бы получить</label></strong>: <?= Html::encode($model->about) ?></p>
</tr>
</table>