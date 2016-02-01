<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_132133_create_schema extends Migration
{
    public function up() {
        $this->execute("CREATE DATABASE IF NOT EXISTS `mymotion` CHARACTER SET utf8 COLLATE utf8_general_ci;");
    }

    public function down() {
        $this->execute("DROP DATABASE [IF EXISTS] `mymotion`;");
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
