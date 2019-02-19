<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 19/2/19
 * Time: 9:08 PM
 */

namespace codexten\yii\cron\controllers;

use yii\web\Controller;

class CronJobController extends Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }
}