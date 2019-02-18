<?php

namespace codexten\yii\cron\components;

/**
 * Interface TaskInterface
 * Common interface to handle tasks
 */
interface TaskInterface
{
    const TASK_STATUS_ACTIVE = 'active';
    const TASK_STATUS_INACTIVE = 'inactive';
    const TASK_STATUS_DELETED = 'deleted';

    /**
     * Returns tasks with given id
     *
     * @param int $task_id
     *
     * @return TaskInterface
     */
    public static function taskGet($task_id);

    /**
     * Returns array of all tasks
     *
     * @return array
     */
    public static function getAll();

    /**
     * Creates new task object and returns it
     *
     * @return TaskInterface
     */
    public static function createNew();

    /**
     * Deletes the task
     *
     * @return mixed
     */
    public function taskDelete();

    /**
     * Saves the task
     *
     * @return mixed
     */
    public function taskSave();

    /**
     * Creates new task run object for current task and returns it
     *
     * @return TaskRunInterface
     */
    public function createTaskRun();

    /**
     * @return int
     */
    public function getTaskId();

    /**
     * @return string
     */
    public function getTime();

    /**
     * @param string $time
     */
    public function setTime($time);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     */
    public function setStatus($status);

    /**
     * @return string
     */
    public function getComment();

    /**
     * @param string $comment
     */
    public function setComment($comment);

    /**
     * @return string
     */
    public function getCommand();

    /**
     * @param string $command
     */
    public function setCommand($command);

    /**
     * @return string
     */
    public function getTs();

    /**
     * @param string $ts
     */
    public function setTs($ts);

    /**
     * @return string
     */
    public function getTsUpdated();

    /**
     * @param string $ts
     */
    public function setTsUpdated($ts);
}
