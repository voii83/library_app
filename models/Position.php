<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "position".
 * @package app\models
 * @property integer $id
 * @property string $name
 */
class Position extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%position}}';
    }
}