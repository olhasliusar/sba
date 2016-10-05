<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),

            'username' => $this->string(45)->notNull()->unique(),
            'full_name' => $this->string(255),
            'email' => $this->string()->notNull()->unique(),
            'role' => $this->smallInteger(1)->notNull()->defaultValue(1),

            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),

            'status' => $this->smallInteger(1)->defaultValue(1),

            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ], $tableOptions);

        $this->insert('user', ['username' => 'admin', 'auth_key' => 'SYW_s5r90eW0Gufm9DYC40gaCSb81WfG', 'password_hash' => '$2y$13$osd9UelnqEh8AJI.p73S0.VLxA9XyekBMxQq/58HPofW0k7i.Bcne']);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
