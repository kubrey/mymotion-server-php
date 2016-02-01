<?php

use yii\db\Schema;
use yii\db\Migration;

class m160201_134113_create_country extends Migration
{
    public function up() {
        $this->createTable("country", [
            'id' => $this->primaryKey(),
            'country_code' => $this->string(4)->notNull(),
            'country_name' => $this->string(80)->notNull(),
            'population' => $this->integer(9)
        ], 'ENGINE = InnoDB'
        );
    }

    public function down() {
        $this->dropTable('country');
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
