<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 19/2/19
 * Time: 9:35 PM
 */

namespace codexten\yii\cron\components;

use Cron\CronExpression;

class CronRunner
{
    /**
     * Runs active cron jobs if current time matches with time expression
     *
     * @param array $tasks
     */
    public static function checkAndRunCronJobs($tasks)
    {
        $date = date('Y-m-d H:i:s');
        foreach ($tasks as $t) {
            /**
             * @var TaskInterface $t
             */
            if (TaskInterface::TASK_STATUS_ACTIVE != $t->getStatus()) {
                continue;
            }

            $cron = CronExpression::factory($t->getTime());

            if ($cron->isDue($date)) {
                self::runTask($t);
            }
        }
    }

}