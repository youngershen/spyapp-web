<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_080014_good extends Migration
{
    public function up()
    {
        $this->createTable('good', [

            'id'   => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL ',
            'price'=> Schema::TYPE_FLOAT . ' NOT NULL DEFAULT 0',
            'discount' => Schema::TYPE_INTEGER . ' DEFAULT 100',
            'description' => Schema::TYPE_TEXT ,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m141014_060442_good cannot be reverted.\n";

        return false;
    }
}
