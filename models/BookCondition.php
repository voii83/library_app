<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "book_condition".
 * @package app\models
 * @property integer $id
 * @property string $state
 */
class BookCondition extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%book_condition}}';
    }
}