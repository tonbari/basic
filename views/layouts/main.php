<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/home.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100 ">
<?php $this->beginBody() ?>

<header id="header">
    <?php
        NavBar::begin([
            'brandLabel' => "Casa dell'artista",
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-lg bg-light fixed-top' ]
        ]);
                $menuItems = [
                    ['label' => 'На главную', 'url' => ['/site/index']],
                    ['label' => 'О нас', 'url' => ['/site/about']],
                    ['label' => 'Художники', 'url' => ['/site/artists']],
                    [
                        'label' => 'Услуги',
                        'items' => [
                            ['label' => 'Реплики картин', 'url' => ['/products/index']],
                            ['label' => 'Роспись помещений', 'url' => ['/products/index1']],
                            ['label' => 'Иллюстрации на заказ', 'url' => ['/products/index2']],
                        ],
                    ],
                    [
                        'label' => 'Цены',
                        'items' => [
                            ['label' => 'Реплики картин', 'url' => ['/site/price_replica']],
                            ['label' => 'Роспись помещений', 'url' => ['/site/price_graffiti']],
                            ['label' => 'Иллюстрации на заказ', 'url' => ['/site/price_illusrtation']],
                        ],
                    ],
            ];
            if (!Yii::$app->user->isGuest) {
                $menuItems[] = 
                    ['label' => 'Панель администратора', 'url' => ['/admin']];
                $menuItems[] = '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-danger logout']
                    )
                    . Html::endForm()
                    . '</li>';
                }
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
        NavBar::end();

    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
