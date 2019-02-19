<?php

namespace codexten\yii\cron\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cron_task}}`.
 */
class M190219083706Create_cron_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cron_task}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'comment' => $this->string(255),
            'run_time' => $this->string(64),
            'run_command' => $this->text(),
            'status' => $this->smallInteger(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cron_task}}');
    }
}
