<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends ActiveRecord
{
    public $name;
    public $password;

    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email'], 'required'],
            // email has to be a valid email address
            ['password', 'string','max'=>50],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            $userset=new Userset;
            $userset->username=$this->email;
            $userset->password=$this->name;
            $date=$userset->save();
//
//            Yii::$app->mailer->compose()
//                ->setTo($email)
//                ->setFrom([$this->email => $this->name])
//                ->setSubject($this->subject)
//                ->setTextBody($this->body)
//                ->send();

            return true;
        }
        return false;
    }
}
