<?php

namespace codexten\yii\cron\commands;

use codexten\yii\cron\models\Task;
use codexten\yii\cron\TaskRunner;
use yii\console\Controller;

class CronController extends Controller
{
    public function actionCheckTasks()
    {
        TaskRunner::checkAndRunTasks(Task::getAll());
    }
}
