<?php


namespace app\models;


use Yii;
use yii\base\Model;

class EmailForm extends Model
{
    public $name;
    public $surname;
    public $phone;
    public $email;

    public function rules()
    {
        return [
            [['name', 'surname','phone', 'email'], 'required', "message" => "Заполните поле"],
            [['name', 'surname'], 'string', 'max'=> 50, "message" => "Максимальное количество символов: 50"],
            [['phone'], 'integer', 'message' => "Неверный телефон"],
            [['phone'], 'string', 'length' => 11, 'message' => "В телефоне максимум 11 цифр"],
            ['email','email', 'message' => "Неверный формат e-mail"],

        ];
    }

    public function beforeValidate()
    {
        foreach ($this->attributes() as $attribute) {
            $this->$attribute = str_replace('<>', '', $this->$attribute);
        }
        return true;
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'phone' => 'Телефон',
            'email' => 'Email'
        ];
    }

    public function send(){
        $name = $this->name;
        $surname = $this->surname;
        $phone = $this->phone;
        $email = $this->email;
        Yii::$app->mailer->compose()
            ->setTo([Yii::$app->params['getterEmail'] => Yii::$app->params['getterName']])
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setSubject('Новый запрос')
            ->setTextBody("
            Имя: $name
            Фамилия: $surname
            Телефон: $phone
            E-mail: $email
            ")
            ->send();

    }
}