<?php

use yii\db\Migration;

/**
 * Handles the creation for table `artist_genre`.
 * Has foreign keys to the tables:
 *
 * - `artist`
 * - `genre`
 */
class m160810_122809_create_junction_table_for_artist_and_genre_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('artist_genre', [
            'artist_id' => $this->integer(),
            'genre_id' => $this->integer(),
            'PRIMARY KEY(artist_id, genre_id)',
        ]);

        // creates index for column `artist_id`
        $this->createIndex(
            'idx-artist_genre-artist_id',
            'artist_genre',
            'artist_id'
        );

        // add foreign key for table `artist`
        $this->addForeignKey(
            'fk-artist_genre-artist_id',
            'artist_genre',
            'artist_id',
            'artist',
            'id',
            'CASCADE'
        );

        // creates index for column `genre_id`
        $this->createIndex(
            'idx-artist_genre-genre_id',
            'artist_genre',
            'genre_id'
        );

        // add foreign key for table `genre`
        $this->addForeignKey(
            'fk-artist_genre-genre_id',
            'artist_genre',
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
        // drops foreign key for table `artist`
        $this->dropForeignKey(
            'fk-artist_genre-artist_id',
            'artist_genre'
        );

        // drops index for column `artist_id`
        $this->dropIndex(
            'idx-artist_genre-artist_id',
            'artist_genre'
        );

        // drops foreign key for table `genre`
        $this->dropForeignKey(
            'fk-artist_genre-genre_id',
            'artist_genre'
        );

        // drops index for column `genre_id`
        $this->dropIndex(
            'idx-artist_genre-genre_id',
            'artist_genre'
        );

        $this->dropTable('artist_genre');
    }
}
