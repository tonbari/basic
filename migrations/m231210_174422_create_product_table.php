<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m231210_174422_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id_product' => $this->integer()->notNull()->primaryKey(),
            'product_name' => $this->string(45)->notNull(),
            'firm' => $this->string(45)->notNull(),
            'model' => $this->string(45)->notNull(),
            'specif' => $this->string(200)->notNull(),
            'price' => $this->string(45)->notNull(),
            'guarantee' => $this->string(45)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
