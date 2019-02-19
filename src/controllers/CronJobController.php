<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 19/2/19
 * Time: 9:08 PM
 */

namespace codexten\yii\cron\controllers;

use codexten\yii\cron\models\CronJob;
use codexten\yii\web\CrudController;

class CronJobController extends CrudController
{
    public $modelClass = CronJob::class;

}