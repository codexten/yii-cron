<?php

namespace codexten\yii\cron\migrations;

use yii\db\Migration;

class m160222_112000_install_task_manager extends Migration
{
    public function up()
    {
        $this->db->createCommand(\codexten\yii\cron\DbHelper::tableTasksSql())->execute();
        $this->db->createCommand(\codexten\yii\cron\DbHelper::tableTaskRunsSql())->execute();
    }

    public function down()
    {
        $this->dropTable('tasks');
        $this->dropTable('task_runs');
    }
}
