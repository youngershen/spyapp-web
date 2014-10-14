<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_080941_article_tag extends Migration
{
    public function up()
    {
        $this->createTable('article_tag', [
            'id' => Schema::TYPE_PK,
            'article_id' => Schema::TYPE_INTEGER,
            'tag_id' => Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addForeignKey("article_id", "article_tag", "article_id", "article", "id", "CASCADE", "CASCADE");
        $this->addForeignKey("tag_id", "article_tag", "tag_id", "tag", "id", "CASCADE", "CASCADE");
    }

    public function down()
    {
        echo "m141014_070203_article_tag cannot be reverted.\n";

        return false;
    }
}
