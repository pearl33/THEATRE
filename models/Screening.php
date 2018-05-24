<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "screening".
 *
 * @property int $id
 * @property int $movie_id
 * @property int $halls_id
 * @property string $scr_date
 *
 * @property Halls $halls
 * @property Movie $movie
 */
class Screening extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'screening';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['movie_id', 'halls_id'], 'required'],
            [['movie_id', 'halls_id'], 'integer'],
            [['scr_date', 'scr_start', 'scr_end'], 'safe'],
            [['halls_id'], 'exist', 'skipOnError' => true, 'targetClass' => Halls::className(), 'targetAttribute' => ['halls_id' => 'id']],
            [['movie_id'], 'exist', 'skipOnError' => true, 'targetClass' => Movie::className(), 'targetAttribute' => ['movie_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'movie_id' => 'Movie',
            'halls_id' => 'Hall',
            'scr_date' => 'Screening Date',
            'scr_start' => 'Screening Start',
            'scr_end' => 'Screening End'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHalls()
    {
        return $this->hasOne(Halls::className(), ['id' => 'halls_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovie()
    {
        return $this->hasOne(Movie::className(), ['id' => 'movie_id']);
    }
}
