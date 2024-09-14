<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Художники';
//$this->params['breadcrumbs'][] = $this->title;
?>
<style>
body { font-family: sans-serif; } 
p { 
font-size: 22px;
line-height: 2;
width: 90%;
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

<?php foreach ($artists as $artist): ?>
    <div class="brif-section"> 
        <h3><?php echo $artist['artist_name'] ?></h3>  
        <p><?php echo $artist['info'] ?></p>
    </div>
<?php endforeach; ?>