<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "client".
 * @package app\models
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $passport_number
 */
class Client extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%client}}';
    }
}