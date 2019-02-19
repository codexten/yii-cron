<?php

namespace codexten\yii\cron\models\query;

/**
 * This is the ActiveQuery class for [[\codexten\yii\cron\models\CronJob]].
 *
 * @see \codexten\yii\cron\models\CronJob
 */
class CronJobQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \codexten\yii\cron\models\CronJob[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \codexten\yii\cron\models\CronJob|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
