<?php

use yii\db\Migration;
use \tebazil\yii2seeder\Seeder;

/**
 * Class m190223_090639_seed_publishing_houses_table
 */
class m190223_090639_seed_publishing_houses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $seeder = new Seeder();
        $generator = $seeder->getGeneratorConfigurator();
        $faker = $generator->getFakerConfigurator();
        
        $seeder->table('{{%publishing_houses}}')->columns([
            'id',
            'name' => $faker->company(),
            'phone' => $faker->tollFreePhoneNumber(),
            'email' => $faker->email(),
            'address' => $faker->address(),
            ])->rowQuantity(50);

        $seeder->refill();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%publishing_houses}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190223_090639_seed_publishing_houses_table cannot be reverted.\n";

        return false;
    }
    */
}
