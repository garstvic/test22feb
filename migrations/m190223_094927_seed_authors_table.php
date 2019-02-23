<?php

use yii\db\Migration;
use \tebazil\yii2seeder\Seeder;

/**
 * Class m190223_094927_seed_authors_table
 */
class m190223_094927_seed_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $seeder = new Seeder();
        $generator = $seeder->getGeneratorConfigurator();
        $faker = $generator->getFakerConfigurator();
        
        $seeder->table('{{%authors}}')->columns([
            'id',
            'firstname' => $faker->firstName(),
            'lastname' => $faker->lastName(),
            'biography' => $faker->realText(),
            ])->rowQuantity(50);

        $seeder->refill();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%authors}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190223_094927_seed_authors_table cannot be reverted.\n";

        return false;
    }
    */
}
