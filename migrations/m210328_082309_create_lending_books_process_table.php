<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lending_books_process}}`.
 */
class m210328_082309_create_lending_books_process_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lending_books_process}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer()->notNull(),
            'employee_id' => $this->integer()->notNull(),
            'client_id' => $this->integer()->notNull(),
            'date_issue' => $this->integer()->notNull(),
            'period' => $this->integer()->notNull(),
            'return_date' => $this->integer()->defaultValue(null),
            'condition_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lending_books_process}}');
    }
}
