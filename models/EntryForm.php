<?php
/**
 * Created by PhpStorm.
 * User: kubrey
 * Date: 28.01.16
 * Time: 14:47
 */

namespace app\models;

use Yii;
use yii\base\Model;


class EntryForm extends Model
{

    public $name;
    public $password;
    public $email;

    public function rules() {
        return [
            [['name', 'email'], 'required'],
            [['email'], 'email']
        ];
    }

    public function validate($attributeNames = null, $clearErrors = true) {
        if ($this->name !== 'kwa') {
            $this->addError('name', Yii::t('app', 'Invalid name'));
        }
        return parent::validate($attributeNames, false);
    }


}