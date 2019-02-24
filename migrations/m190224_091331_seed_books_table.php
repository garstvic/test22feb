<?php

use yii\db\Migration;
use yii\db\Query;
use app\models\Authors;
use app\models\PublishingHouses;
use app\models\Rubrics;
use \tebazil\yii2seeder\Seeder;

/**
 * Class m190224_091331_seed_books_table
 */
class m190224_091331_seed_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $query = new Query;
        $query->select('id')
            ->from(Rubrics::tableName())
            ->orderBy('id');
        $rows = $query->all();

        $rubrics_id_list = [];
        foreach ($rows as $row)
        {
            array_push($rubrics_id_list, $row['id']);
        }
        
        $query = new Query;
        $query->select('id')
            ->from(Authors::tableName())
            ->orderBy('id');
        $rows = $query->all();

        $authors_id_list = [];
        foreach ($rows as $row)
        {
            array_push($authors_id_list, $row['id']);
        }
        
        $query = new Query;
        $query->select('id')
            ->from(PublishingHouses::tableName())
            ->orderBy('id');
        $rows = $query->all();

        $publishing_houses_id_list = [];
        foreach ($rows as $row)
        {
            array_push($publishing_houses_id_list, $row['id']);
        }
        
        $seeder = new Seeder();
        $generator = $seeder->getGeneratorConfigurator();
        $faker = $generator->getFakerConfigurator();
        
        $seeder->table('{{%books}}')->columns([
            'id',
            'name' => $faker->realText($maxNbChars = 30),
            'ISBN' => $faker->isbn10(),
            'author_id' => $faker->randomElement($authors_id_list),
            'publishing_house_id' => $faker->randomElement($publishing_houses_id_list),
            'rubric_id' => $faker->randomElement($rubrics_id_list),
            ])->rowQuantity(350);

        $seeder->refill();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%books}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190224_091331_seed_books_table cannot be reverted.\n";

        return false;
    }
    */
}
