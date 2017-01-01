<?php

use yii\db\Migration;

/**
 * Handles the creation for table `manager`.
 */
class m161013_075900_create_manager_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('manager', [
            'id' => $this->primaryKey(),
            'name_en' => $this->string(),
            'name_ru' => $this->string(),

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
        $this->dropTable('manager');
    }
}
