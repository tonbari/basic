<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Artists;
?>
<style>
   table {
    margin: auto; /* Выравниваем таблицу по центру окна  */
   }
  </style>
<div class="alert alert-dismissible alert-info">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Обратите внимание!</strong> На нашем сайте вы можете заказать любую работу, даже если она не представлена в галерее.
  Просто опишите какую работу вы хотели бы приобрести и выбранный художник обсудит с вами необходимые детали.
</div>
<div class="container">   
<table width="60%">
   <tr> 
    <td width="600" valign="top">
    <h4>Чтобы назвать вам цену, нам необходимо ознакомиться с работой. 
        Оставьте заявку и мы рассчитаем стоимость.</h4><br>
<?php $form = ActiveForm::begin(); 
    $artists = Artists::find()->all();
    $items = ArrayHelper::map($artists,'idartists','artist_name');
    $params = [
        'prompt' => 'Выберите художника'
    ];
    echo $form->field($model, 'idartists')->dropDownList($items,$params)->label('Художник'); ?>
    <?= $form->field($model, 'client_name')->label('Ваше имя') ?>
    <?= $form->field($model, 'email')->label('Email') ?>
    <?= $form->field($model, 'phone_number')->label('Номер телефона') ?>
    <?= $form->field($model, 'about')->textarea()->label('Опишите в общих чертах какого рода работу хотели бы получить') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary'])?>
        <img src="https://cojo.ru/wp-content/uploads/2024/01/pikselnye-kotiki-1.gif" width="150px" height="150px">
    </div>
<?php ActiveForm::end(); ?>
</td>
    </tr>
</table>
</div>
