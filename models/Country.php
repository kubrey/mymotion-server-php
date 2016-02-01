<?php
/**
 * Created by PhpStorm.
 * User: kubrey
 * Date: 01.02.16
 * Time: 15:53
 */

namespace app\models;

use yii\db\ActiveRecord;


class Country extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'population'], 'integer'],
            [['country_code', 'country_name'], 'safe'],
        ];
    }


    public  static function tableName(){
        return 'country';
    }
}