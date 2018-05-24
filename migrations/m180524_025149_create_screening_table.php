<?php

use yii\db\Migration;

/**
 * Handles the creation of table `screening`.
 */
class m180524_025149_create_screening_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('screening', [
            'id' => $this->primaryKey(),
            'movie_id'=>$this->integer(11)->notNull(),
            'halls_id'=>$this->integer(11)->notNull(),
            'scr_date'=>$this->date('DATE'),
            'scr_start'=>$this->string(25),
            'scr_end'=>$this->string(25)
        ]);
        $this->createIndex('idx-screening-movie_id', 'screening', 'movie_id');
        $this->addForeignKey('fk-screening-movie',
            'screening',
            'movie_id',
            'movie','id');
        $this->createIndex('idx-screening-halls_id', 'screening', 'halls_id');
        $this->addForeignKey('fk-screening-halls',
            'screening',
            'halls_id',
            'halls','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-screening-movie','screening');
        $this->dropForeignKey('fk-screening-halls','screening');
        $this->dropIndex('idx-screening-movie_id','screening');
        $this->dropIndex('idx-screening-halls_id','screening');
        $this->dropTable('screening');
    }
}
