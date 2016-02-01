<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_132544_create_user extends Migration
{
    public function up() {
        $this->execute("CREATE USER 'mymotion'@'localhost' IDENTIFIED BY 'mymotion';GRANT ALL PRIVILEGES ON * . * TO 'mymotion'@'localhost';");
    }

    public function down() {
        $this->execute("DROP USER 'mymotion'@'localhost';");
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
