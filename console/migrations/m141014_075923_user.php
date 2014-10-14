<?php

use yii\db\Schema;
use yii\db\Migration;

class m141014_075923_user extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'role' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'cellphone' => Schema::TYPE_STRING . ' NOT NULL',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

    }

    public function down()
    {
        echo "m141014_035903_users cannot be reverted.\n";

        return false;
    }
}

