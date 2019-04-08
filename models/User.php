<?php

namespace app\models;

use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userset';
    }
    public function rules()
    {
        return [
            [['username','password'],'string','max'=>15],
            [['authKey'],'string','max'=>50],
            [['username'],'unique'],
            [['authKey'],'unique']
            ];
    }
    public function attributeLabels()
    {
        return [
            'id'=>Userset::t('app','id'),
            'username'=>Userset::t('app','username'),
            'password'=>Userset::t('app','password'),
            'authKey'=>Userset::t('app','authKey'),
            'accessToken'=>Userset::t('app','accessToken'),
        ];
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function getId()
    {
        return $this->id;
    }
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException();
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::findOne(['username'=>$username]);
    }
    /**
     * {@inheritdoc}
     */

    /**
     * {@inheritdoc}
     */


    /**
     * {@inheritdoc}
     */


    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
