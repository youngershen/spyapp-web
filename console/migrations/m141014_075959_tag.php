<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_075959_tag extends Migration
{
    public function up()
    {
        $this->createTable('tag', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT ,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL'
        ]);
        $this->createIndex("name", "tag", "name", true);
    }

    public function down()
    {
        echo "m141014_060422_tag cannot be reverted.\n";

        return false;
    }
}
