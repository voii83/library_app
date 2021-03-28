<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "employee".
 * @package app\models
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $surname
 * @property integer $position_id
 */
class Employee extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%employee}}';
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        return $this->hasOne(Author::class, ['id' => 'position_id']);
    }
}