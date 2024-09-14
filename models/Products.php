<?php
namespace app\models;
use yii\db\ActiveRecord;
class Products extends ActiveRecord
{
    public $idcategories;
    public function getArtists() { return $this->hasMany(Artists::class, ['idartists' => 'idartists']);}
    public function getCategories() { return $this->hasOne(Categories::class, ['idcategories' => 'idcategories']);}
}