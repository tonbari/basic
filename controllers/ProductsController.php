<?php
namespace app\controllers;
use yii\web\Controller;
class ProductsController extends Controller
{
public function actionIndex()
{
    $query = (new \yii\db\Query())
    ->select('*')
    ->from('products')
    ->leftJoin('categories', '`categories`.`idcategories` = `products`.`idcategories`')
    ->leftJoin('artists', '`artists`.`idartists` = `products`.`idartists`')
    ->where(['category_name' => 'Копия'])
    ->all();
    return $this->render('index', ['products' => $query]);
}

public function actionIndex1()
{
    $query = (new \yii\db\Query())
    ->select('*')
    ->from('products')
    ->leftJoin('categories', '`categories`.`idcategories` = `products`.`idcategories`')
    ->leftJoin('artists', '`artists`.`idartists` = `products`.`idartists`')
    ->where(['category_name' => 'Граффити'])
    ->all();
    return $this->render('index1', ['products' => $query]);
}

public function actionIndex2()
{
    $query = (new \yii\db\Query())
    ->select('*')
    ->from('products')
    ->leftJoin('categories', '`categories`.`idcategories` = `products`.`idcategories`')
    ->leftJoin('artists', '`artists`.`idartists` = `products`.`idartists`')
    ->where(['category_name' => 'Иллюстрация'])
    ->all();
    return $this->render('index2', ['products' => $query]);
}
}