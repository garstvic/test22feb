<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rubrics}}`.
 */
class m190223_102037_create_rubrics_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rubrics}}', [
            'id' => $this->primaryKey(),
            'tree' => $this->integer(),
            'lft' => $this->integer(),
            'rgt' => $this->integer(),
            'depth' => $this->integer(),
            'name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rubrics}}');
    }
}
