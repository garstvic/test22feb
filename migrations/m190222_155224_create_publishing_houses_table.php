<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publishing_houses}}`.
 */
class m190222_155224_create_publishing_houses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publishing_houses}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'address' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%publishing_houses}}');
    }
}
