<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $email
 * @property integer $role
 * @property string $cellphone
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Article[] $articles
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['username', 'password_hash', 'email', 'cellphone' ], 'required'],
            [['role', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'password_hash', 'email', 'cellphone'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'email' => 'Email',
            'role' => 'Role',
            'cellphone' => 'Cellphone',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['author_id' => 'id']);
    }
    
    public function set_password($password)
    {
        $this->password_hash = md5($password);
    }

    public function validatePassword($password)
    {

        if($this->password_hash == md5($password)){
            return true;
        }
        return false;
    }

    public static function findIdentity($id)
    {

        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token] );
    }
    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        //return $this->authkey;
    }
    public function validateAuthKey($authKey)
    {
        return $this->authKey == $authKey;
    }

    public static function findByUsername($username)
    {

        $user = User::find()->where(['username' => $username])->one();
        return $user;
    }
}
