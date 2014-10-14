<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_075933_category extends Migration
{
    public function up()
    {
        
        $this->createTable('category', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL ',
            'describtion' => Schema::TYPE_TEXT ,
            'created_at'  => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at'  => Schema::TYPE_INTEGER . ' NOT NULL',
            'parent_id'   => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);


        $this->addForeignKey("parent_id", "category", "parent_id", "category", "id", "CASCADE", "CASCADE");
        $this->createIndex("name", "category", "name", true);
    }

    public function down()
    {
        echo "m141014_060416_category cannot be reverted.\n";

        return false;
    }
}
