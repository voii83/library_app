<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "lending_books_process".
 * @package app\models
 * @property integer $id
 * @property integer $book_id
 * @property integer $employee_id
 * @property integer $client_id
 * @property integer $date_issue
 * @property integer $period
 * @property integer $return_date
 * @property integer $condition_id
 */
class LendingBooksProcess extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%lending_books_process}}';
    }

    /**
     * {@inheritdoc}
     */
    public function getBook()
    {
        return $this->hasOne(Book::class, ['id' => 'book_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmployee()
    {
        return $this->hasOne(Book::class, ['id' => 'employee_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function getClient()
    {
        return $this->hasOne(Book::class, ['id' => 'client_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBookCondition()
    {
        return $this->hasOne(Book::class, ['id' => 'condition_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date_issue'],
                ],
            ],
        ];
    }
}