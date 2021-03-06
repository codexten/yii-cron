<?php

namespace codexten\yii\cron\commands;

use codexten\yii\cron\models\CronJob;
use codexten\yii\cron\models\Task;
use yii\console\Controller;
use codexten\yii\cron\components\TaskRunner;

class CronController extends Controller
{
    public function actionCheck()
    {
//        echo "worked at : " . \Yii::$app->formatter->asDatetime(time());
        TaskRunner::checkAndRunTasks(CronJob::find()->all());
    }


    public function actionCheckTasks()
    {
        TaskRunner::checkAndRunTasks(Task::getAll());
    }
}
