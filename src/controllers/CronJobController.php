<?php

namespace codexten\yii\cron\controllers;

use Yii;
use codexten\yii\cron\models\CronJob;
use codexten\yii\web\CrudController;

/**
 * CronJobController implements the CRUD actions for CronJob model.
 */
class CronJobController extends CrudController
{
    public $modelClass = CronJob::class;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();

        return $actions;
    }

}
