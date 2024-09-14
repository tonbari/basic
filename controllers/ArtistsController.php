<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Artists;
class ArtistsController extends Controller
{
public function actionIndex()
{
    $query = Artists::find()->all();
    return $this->render('index', ['artists' => $query]);
}
}