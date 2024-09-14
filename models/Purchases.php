<?php
namespace app\models;
use yii\db\ActiveRecord;
class Purchases extends ActiveRecord
{
    public function getArtists() { return $this->hasMany(Artists::class, ['idartists' => 'idartists']);}
}
