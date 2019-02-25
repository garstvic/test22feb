<?php

namespace app\models;

use Yii;
use app\models\Authors;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property string $ISBN
 * @property int $author_id
 * @property int $rubric_id
 * @property string $published_date
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'rubric_id'], 'integer'],
            [['published_date'], 'safe'],
            [['name', 'ISBN'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'ISBN' => 'I S B N',
            'author_id' => 'Author ID',
            'rubric_id' => 'Rubric ID',
            'published_date' => 'Published Date',
        ];
    }
    
    public function getAuthor()
    {
        return $this->hasOne(Authors::className(), ['id' => 'author_id']);
    }
}
