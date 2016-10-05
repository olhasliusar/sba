<?php

use yii\db\Migration;

class m160825_082926_insert_genre_items extends Migration
{
    public function up()
    {
        $this->insert('genre', ['name' => 'Go-go dance']);
        $this->insert('genre', ['name' => 'Cover bеnds']);
        $this->insert('genre', ['name' => 'Belly dance']);
        $this->insert('genre', ['name' => 'Freak show']);
        $this->insert('genre', ['name' => 'DJs']);
        $this->insert('genre', ['name' => 'big show']);
        $this->insert('genre', ['name' => 'dancing couples']);
        $this->insert('genre', ['name' => 'show ballet']);
        $this->insert('genre', ['name' => 'model']);
        $this->insert('genre', ['name' => 'musicians']);
        $this->insert('genre', ['name' => 'animators']);
        $this->insert('genre', ['name' => 'light/fire show']);
        $this->insert('genre', ['name' => 'hostesses']);
        $this->insert('genre', ['name' => 'original genre']);
        $this->insert('genre', ['name' => 'pole/strip dance']);
        $this->insert('genre', ['name' => 'staff']);
    }

    public function down()
    {
        $this->delete('genre', ['status' => '1']);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
