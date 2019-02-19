<?php

namespace codexten\yii\cron;

use Yii;
use yii\base\Exception;

/**
 * Class CronModule
 *
 * @package codexten\yii\cron
 */
class CronModule extends \yii\base\Module
{
    public $controllerNamespace = 'codexten\yii\cron\controllers';

    public $defaultRoute = 'cron-job';

    /**
     * @throws Exception
     */
    public function init()
    {
        parent::init();
    }
}