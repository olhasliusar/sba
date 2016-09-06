<?php

use yii\db\Migration;

/**
 * Handles the creation for table `article_genre`.
 * Has foreign keys to the tables:
 *
 * - `article`
 * - `genre`
 */
class m160810_122823_create_junction_table_for_article_and_genre_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article_genre', [
            'article_id' => $this->integer(),
            'genre_id' => $this->integer(),
            'PRIMARY KEY(article_id, genre_id)',
        ]);

        // creates index for column `article_id`
        $this->createIndex(
            'idx-article_genre-article_id',
            'article_genre',
            'article_id'
        );

        // add foreign key for table `article`
        $this->addForeignKey(
            'fk-article_genre-article_id',
            'article_genre',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

        // creates index for column `genre_id`
        $this->createIndex(
            'idx-article_genre-genre_id',
            'article_genre',
            'genre_id'
        );

        // add foreign key for table `genre`
        $this->addForeignKey(
            'fk-article_genre-genre_id',
            'article_genre',
            'genre_id',
            'genre',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `article`
        $this->dropForeignKey(
            'fk-article_genre-article_id',
            'article_genre'
        );

        // drops index for column `article_id`
        $this->dropIndex(
            'idx-article_genre-article_id',
            'article_genre'
        );

        // drops foreign key for table `genre`
        $this->dropForeignKey(
            'fk-article_genre-genre_id',
            'article_genre'
        );

        // drops index for column `genre_id`
        $this->dropIndex(
            'idx-article_genre-genre_id',
            'article_genre'
        );

        $this->dropTable('article_genre');
    }
}
