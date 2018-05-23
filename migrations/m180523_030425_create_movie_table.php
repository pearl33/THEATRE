<?php

use yii\db\Migration;

/**
 * Handles the creation of table `movie`.
 */
class m180523_030425_create_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('movie', [
            'id' => $this->primaryKey(),
            'title' =>$this->string(255)->notNull(),
            'genre' =>$this->string(255)->notNull(),
            'director'=>$this->string(255)->notNull(),
            'cast'=>$this->string(255)->notNull(),
            'description'=>$this->string(255)->notNull(),
            'duration'=>$this->string(11)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('movie');
    }
}
