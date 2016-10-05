<?php

use yii\db\Migration;

/**
 * Handles the creation for table `company`.
 */
class m160924_084100_create_company_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),

            'name' => $this->string(),
            'address' => $this->string(),
            'description' => $this->text(),

            'worker1' => $this->string(),
            'worker2' => $this->string(),
            'worker3' => $this->string(),

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
        $this->dropTable('company');
    }
}
