<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210122_091625_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
