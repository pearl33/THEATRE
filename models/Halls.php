<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "halls".
 *
 * @property int $id
 * @property string $title
 * @property int $seats_no
 *
 * @property Screening[] $screenings
 */
class Halls extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'halls';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'seats_no'], 'required'],
            [['seats_no'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'seats_no' => 'Seats No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScreenings()
    {
        return $this->hasMany(Screening::className(), ['halls_id' => 'id']);
    }
}
