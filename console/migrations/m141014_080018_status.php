<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_080018_status extends Migration
{
    public function up()
    {
        $this->createTable('status', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING, 
            'description' => Schema::TYPE_TEXT ,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->createIndex("name", "status", "name", true);
    }


    public function down()
    {
        echo "m141014_063749_order_status cannot be reverted.\n";

        return false;
    }
}
