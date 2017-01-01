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

            'first_name' => $this->string(),
            'last_name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),

            'birth' => $this->string(),
            'height_weight' => $this->string(),
            'country_city' => $this->string(),
            'fc' => $this->string(),
            'video1' => $this->string(),
            'video2' => $this->string(),

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
