<?php

use yii\db\Migration;

class m161013_075934_insert_manager_items extends Migration
{
    public function up()
    {
        $this->insert('manager', ['name_en' => 'I do not have a manager', 'name_ru' => 'У меня еще нет менеджера']);
        $this->insert('manager', ['name_en' => 'Vadim Drozdovsky - Head', 'name_ru' => 'Вадим Дроздовский - руководитель']);
        $this->insert('manager', ['name_en' => 'Vadim Belomar', 'name_ru' => 'Вадим Беломар']);
        $this->insert('manager', ['name_en' => 'Gleb Tenyakov', 'name_ru' => 'Глеб Теняков']);
        $this->insert('manager', ['name_en' => 'Lily Markunas', 'name_ru' => 'Лилия Маркунас']);
        $this->insert('manager', ['name_en' => 'Denis Trojans', 'name_ru' => 'Денис Троянов']);
        $this->insert('manager', ['name_en' => 'Daria Murzina', 'name_ru' => 'Дарья Мурзина']);
        $this->insert('manager', ['name_en' => 'Anton Naboka', 'name_ru' => 'Антон Набока']);
    }

    public function down()
    {
        $this->delete('manager', ['status' => '1']);
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
