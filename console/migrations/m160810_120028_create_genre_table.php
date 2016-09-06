<?php

use yii\db\Migration;

/**
 * Handles the creation for table `genre`.
 */
class m160810_120028_create_genre_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('genre', [
            'id' => $this->primaryKey(),

            'name' => $this->string(255),
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
        $this->dropTable('genre');
    }
}
