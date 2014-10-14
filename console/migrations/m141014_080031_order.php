<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_080031_order extends Migration
{
    public function up()
    {
        $this->createTable('order', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_TEXT . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'total_price' => Schema::TYPE_FLOAT . ' NOT NULL DEFAULT 0',
            'status_id'=> Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
    
        $this->addForeignKey("status_id", "order", "status_id", "status", "id", "CASCADE", "CASCADE" );
    }

    public function down()
    {
        echo "m141014_060447_order cannot be reverted.\n";

        return false;
    }
}
