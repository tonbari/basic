<?php
namespace app\models;
use yii\db\ActiveRecord;
class Categories extends ActiveRecord
{
    public function getProducts() { return $this->hasMany(Products::class, ['idcategories' => 'idcategories']);}
}