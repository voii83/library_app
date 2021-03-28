<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_condition}}`.
 */
class m210328_082250_create_book_condition_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book_condition}}', [
            'id' => $this->primaryKey(),
            'state' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book_condition}}');
    }
}
