<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "author".
 * @package app\models
 * @property integer $id
 * @property string $name
 */
class Author extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%author}}';
    }
}