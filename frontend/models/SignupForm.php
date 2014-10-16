<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $cellphone;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '用户名已经被注册'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '邮箱已被注册'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['cellphone', 'filter', 'filter' => 'trim'],
            ['cellphone', 'required'],
            //['cellphone', 'cellphone'],
            ['cellphone', 'unique', 'targetClass' => '\common\models\User', 'message' => '手机号码已被注册']
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->cellphone = $this->cellphone;
            $user->set_password($this->password);
            $user->role = 0;
            $user->save();
            return $user;
        }

        return null;
    }
}
