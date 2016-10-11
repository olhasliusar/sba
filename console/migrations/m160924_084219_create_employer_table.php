<?php

use common\components\helpers\migration;

/**
 * Handles the creation for table `employer`.
 */
class m160924_084219_create_employer_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('employer', [
            'id' => $this->primaryKey(),
            'company_id' => $this->int(true),
            'role' => $this->smallInteger(1),

            'first_name' => $this->string(),
            'last_name' => $this->string(),

            'email' => $this->string(),
            'skype' => $this->string(),
            'phone' => $this->string(),
        
            'status' => $this->smallInteger(1)->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('employer');
    }
}
