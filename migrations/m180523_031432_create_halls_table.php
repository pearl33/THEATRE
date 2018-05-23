<?php

use yii\db\Migration;

/**
 * Handles the creation of table `halls`.
 */
class m180523_031432_create_halls_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('halls', [
            'id' => $this->primaryKey(),
            'title' =>$this->string(255)->notNull(),
            'seats_no' =>$this->integer(11)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('halls');
    }
}
