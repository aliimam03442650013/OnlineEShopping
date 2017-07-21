<?php

use yii\db\Schema;
use yii\db\Migration;

class m141123_221352_shopnews extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%news}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING,
            'slug' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT,
            'category_id' => Schema::TYPE_INTEGER,
            'active_status' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->addForeignKey('fk-news-category_id-category_id', '{{%news}}', 'category_id', '{{%category}}', 'id', 'RESTRICT');



    }
}