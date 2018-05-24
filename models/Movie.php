<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movie".
 *
 * @property int $id
 * @property string $title
 * @property string $genre
 * @property string $director
 * @property string $cast
 * @property string $description
 * @property string $duration
 *
 * @property Screening[] $screenings
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'genre', 'director', 'cast', 'description', 'duration'], 'required'],
            [['title', 'genre', 'director', 'cast', 'description'], 'string', 'max' => 255],
            [['duration'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'genre' => 'Genre',
            'director' => 'Director',
            'cast' => 'Cast',
            'description' => 'Description',
            'duration' => 'Duration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScreenings()
    {
        return $this->hasMany(Screening::className(), ['movie_id' => 'id']);
    }
}
