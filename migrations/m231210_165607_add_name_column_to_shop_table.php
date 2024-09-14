<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%shop}}`.
 */
class m231210_165607_add_name_column_to_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%shop}}', 'name', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%shop}}', 'name');
    }
}
