<?php

use yii\db\Migration;

/**
 * Handles the creation of table `testimonials`.
 */
class m161105_151322_create_testimonials_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('testimonials', [
            'id' => $this->primaryKey(),
            'name_en' => $this->string(),
            'name_ru' => $this->string(),
            'text_en' => $this->text(),
            'text_ru' => $this->text(),
            'video' => $this->string(255),

            'status' => $this->smallInteger(1)->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        $this->insert('testimonials', ['name_en' => 'Video Review of the SBA by George', 'name_ru' => 'Видео отзыв о SBA от Георгия', 'created_at' => time()]);
        $this->insert('testimonials', ['name_en' => 'Video Review of the SBA from Alice', 'name_ru' => 'Видео отзыв о SBA от Алисы', 'created_at' => time()]);
        $this->insert('testimonials', ['name_en' => 'Video Review of the SBA by Catherine gymnasts from Dubai', 'name_ru' => 'Видео отзыв о SBA от гимнастки Екатерины с Дубая', 'created_at' => time()]);
        $this->insert('testimonials', ['name_en' => 'Video Review of the SBA by choreographer Alina', 'name_ru' => 'Видео отзыв о SBA от хореографа Алины', 'created_at' => time()]);
        $this->insert('testimonials', ['name_en' => 'Great video review of SBA company from Sergey and Miroslav', 'name_ru' => 'Супер видео отзыв о компании SBA от Сергея и Мирослава', 'created_at' => time()]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('testimonials');
    }
}
