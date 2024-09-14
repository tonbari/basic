<?php
namespace app\models;
use yii\base\Model;
use yii\db\ActiveRecord;

class PurchasesForm extends ActiveRecord
{
    public $idartists;
    public $artist_name;
    public $client_name;
    public $email;
    public $phone_number;
    public $about;
 
    public function rules()
    {
        return [
            [['idartists', 'client_name', 'email', 'phone_number', 'about',], 'required', 'message'=>'Поле не может быть пустым.'],


];
    }
}

