<?php

use yii\db\Migration;
use app\models\Rubrics;

/**
 * Class m190223_115118_seed_rubrics_table
 */
class m190223_115118_seed_rubrics_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $history = new Rubrics(['name' => 'History']);
        $history->makeRoot();
        $world = new Rubrics(['name' => 'World']);
        $world->prependTo($history);
        $middleAges = new Rubrics(['name' => 'Middle Ages']);
        $middleAges->prependTo($history);
        $countries = new Rubrics(['name' => 'Countries']);
        $countries->prependTo($middleAges);
        
        
        $programming = new Rubrics(['name' => 'Programming']);
        $programming->makeRoot();
        $php = new Rubrics(['name' => 'PHP']);
        $php->prependTo($programming);
        $java = new Rubrics(['name' => 'JAVA']);
        $java->prependTo($programming);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%rubrics}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190223_115118_seed_rubrics_table cannot be reverted.\n";

        return false;
    }
    */
}
