<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shop}}`.
 */
class m231210_163308_create_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('shop1', [
            'id_shop' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
            'email' => $this->string(60)->notNull(),
            'shipping_payment' => $this->tinyInteger()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shop1');
    }
}
