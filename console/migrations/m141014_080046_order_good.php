<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_080046_order_good extends Migration
{
    public function up()
    {
        $this->createTable('order_good', [
            'id' => Schema::TYPE_PK,
            'order_id' =>Schema::TYPE_INTEGER,
            'good_id'=> Schema::TYPE_INTEGER,
            'count' =>Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
            'price' =>Schema::TYPE_FLOAT . ' NOT NULL DEFAULT 0',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addForeignKey("order_id", "order_good", "order_id", "order", "id" , "CASCADE", "CASCADE");
        $this->addForeignkey("good_id", "order_good", "good_id", "good", "id", "CASCADE", "CASCADE");
    }

    public function down()
    {
        echo "m141014_070959_order_good cannot be reverted.\n";

        return false;
    }
}
