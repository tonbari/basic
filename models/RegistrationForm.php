<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegistrationForm extends Model
{
    public $username;
    public $password;

    private $_user = false;

    public function rules()
    {
        return [
            ['username', 'required', 'message'=>'Логин не может быть пустым'],
            ['password', 'required', 'message'=>'Пароль не может быть пустым'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Пользователь с таким логином уже существует'],
        ];
    }

    public function registration()
    {
 
        if (!$this->validate()) {
            return null;
        }
 
        $user = new User();
        $user->username = $this->username;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }
}
