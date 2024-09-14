<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%firm_column_to_product}}`.
 */
class m231210_174605_drop_firm_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%firm_column_to_product}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%firm_column_to_product}}', [
            'id' => $this->primaryKey(),
            'firm' => $this->string(),
        ]);
    }
}
