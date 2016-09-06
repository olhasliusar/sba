<?php

use yii\db\Migration;

/**
 * Handles the creation for table `artist`.
 */
class m160810_112411_create_artist_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('artist', [
            'id' => $this->primaryKey(),

            'first_name' => $this->string(255),
            'last_name' => $this->string(255),

            'email' => $this->string()->notNull()->unique(),

            'phone' => $this->string(255),

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
        $this->dropTable('artist');
    }
}
