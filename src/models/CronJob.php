<?php

namespace codexten\yii\cron\models;

use codexten\yii\cron\components\TaskInterface;
use codexten\yii\cron\components\TaskRunInterface;
use codexten\yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "{{%cron_job}}".
 *
 * Database fields:
 *
 * @property int $id
 * @property string $name
 * @property string $comment
 * @property string $run_time
 * @property string $run_command
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class CronJob extends ActiveRecord implements TaskInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cron_job}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['run_command'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'comment'], 'string', 'max' => 255],
            [['run_time'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'comment' => Yii::t('app', 'Comment'),
            'run_time' => Yii::t('app', 'Run Time'),
            'run_command' => Yii::t('app', 'Run Command'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }


    /**
     *{@inheritdoc}
     */
    public function canUpdate()
    {
        //if (!Yii::$app->user->can('partner.update')) {
        //    return false;
        //}

        return parent::canUpdate();
    }

    /**
     *{@inheritdoc}
     */
    public function canView()
    {
        //if (!Yii::$app->user->can('partner.view')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     *{@inheritdoc}
     */
    public function canDelete()
    {
        //if (!Yii::$app->user->can('partner.delete')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $meta = parent::getMeta();

        //if ($this->canView()) {
        //    $meta['viewUrl'] = Url::to(['@partner/view', 'id' => $this->id]);
        //}
        //if ($this->canUpdate()) {
        //    $meta['updateUrl'] = Url::to(['@partner/update', 'id' => $this->id]);
        //}

        return $meta;
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        $fields = parent::fields();

        return $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function extraFields()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     * @return \codexten\yii\cron\models\query\CronJobQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \codexten\yii\cron\models\query\CronJobQuery(get_called_class());
    }

    /**
     * Returns tasks with given id
     *
     * @param int $task_id
     *
     * @return TaskInterface
     */
    public static function taskGet($task_id)
    {
        return self::findOne($task_id);
    }

    /**
     * Returns array of all tasks
     *
     * @return array
     */
    public static function getAll()
    {
        return self::find()->all();
    }

    /**
     * Creates new task object and returns it
     *
     * @return TaskInterface
     */
    public static function createNew()
    {
        // TODO: Implement createNew() method.
    }

    /**
     * Deletes the task
     *
     * @return mixed
     */
    public function taskDelete()
    {
        // TODO: Implement taskDelete() method.
    }

    /**
     * Saves the task
     *
     * @return mixed
     */
    public function taskSave()
    {
        // TODO: Implement taskSave() method.
    }

    /**
     * Creates new task run object for current task and returns it
     *
     * @return TaskRunInterface
     */
    public function createTaskRun()
    {
        // TODO: Implement createTaskRun() method.
    }

    /**
     * @return int
     */
    public function getTaskId()
    {
        // TODO: Implement getTaskId() method.
    }

    /**
     * @return string
     */
    public function getTime()
    {
        // TODO: Implement getTime() method.
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        // TODO: Implement setTime() method.
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        // TODO: Implement getStatus() method.
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        // TODO: Implement setStatus() method.
    }

    /**
     * @return string
     */
    public function getComment()
    {
        // TODO: Implement getComment() method.
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        // TODO: Implement setComment() method.
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        // TODO: Implement getCommand() method.
    }

    /**
     * @param string $command
     */
    public function setCommand($command)
    {
        // TODO: Implement setCommand() method.
    }

    /**
     * @return string
     */
    public function getTs()
    {
        // TODO: Implement getTs() method.
    }

    /**
     * @param string $ts
     */
    public function setTs($ts)
    {
        // TODO: Implement setTs() method.
    }

    /**
     * @return string
     */
    public function getTsUpdated()
    {
        // TODO: Implement getTsUpdated() method.
    }

    /**
     * @param string $ts
     */
    public function setTsUpdated($ts)
    {
        // TODO: Implement setTsUpdated() method.
    }
}
