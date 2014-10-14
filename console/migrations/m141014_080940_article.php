<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_080940_article extends Migration
{
    public function up()
    {
        $this->createTable('article', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_TEXT . ' NOT NULL',
            'content' => Schema::TYPE_TEXT ,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'author_id' =>Schema::TYPE_INTEGER . ' NOT NULL',
            'category_id' =>Schema::TYPE_INTEGER . ' NOT NULL'
        ]);

        $this->addForeignKey("author_id", "article", "author_id", "user", "id", "CASCADE", "CASCADE");
        $this->addForeignKey("category_id", "article", "category_id", "category", "id", "CASCADE", "CASCADE");
    }

    public function down()
    {
        echo "m141014_054835_article cannot be reverted.\n";

        return false;
    }
}
