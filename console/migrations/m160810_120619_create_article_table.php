<?php

use yii\db\Migration;

/**
 * Handles the creation for table `article`.
 */
class m160810_120619_create_article_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article', [
            'id' => $this->primaryKey(),

            'name' => $this->string(255),
            'text' => $this->text(),
            'video' => $this->string(255),
            'lang' => $this->string(4),
            'author' => $this->string(255),

            'role' => $this->smallInteger(1),
            'show' => $this->smallInteger(1)->defaultValue(1),
            'status' => $this->smallInteger(1)->defaultValue(1),

            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('article');
    }
}
