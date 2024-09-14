<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%name_column_to_shop}}`.
 */
class m231210_170327_drop_name_column_to_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%name_column_to_shop}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%name_column_to_shop}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }
}
