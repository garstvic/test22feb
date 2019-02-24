<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m190224_085042_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'ISBN' => $this->string(),
            'author_id' => $this->integer(),
            'publishing_house_id' => $this->integer(),
            'rubric_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
