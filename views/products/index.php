<?php
use yii\helpers\Html;
?>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<style>
.container {
    display: grid;
    grid-template-columns: repeat(3, 400px);
    gap: 20px;
}
.center-image {
    text-align: center;
}
p{
    font-size: 100%;
    line-height: 1;
}
.container {
  padding: 2px 16px;
}
.card {
  border: none;
}
</style>
<?php foreach ($products as $product): ?>
    <div class="container">   
    <div class="card">
        <div class="center-image">
        <a
        data-fancybox
        data-src="img/replic/<?php echo $product['img']; ?>" width="400px" height="280px"
        data-caption="<?php echo $product['product_name'] ?>"
        >
        <img src="img/replic/<?php echo $product['img']; ?>" width="400px" height="280px" >
        </a>
        </div>
        <div class="card-body">
        <h4 class="card-text"><?php echo $product['product_name'] ?></h4>
        <h6 class="card-text"><?php echo $product['artist_name'] ?></h6>
            <p class="card-text"><?php echo $product['about'] ?></p>
        </div>
            <div class="card-body">
            <?= Html::a('Узнать стоимость', ['crud/createpurchases'], ['class' => 'purchases-link']) ?>
            </div>
        </div>   
    </div>
<?php endforeach; ?>
</section>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind('[data-fancybox]', {
      });    
</script>



