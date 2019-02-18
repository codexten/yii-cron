<?php

namespace codexten\yii\cron;

use yii\web\AssetBundle;

class TasksAsset extends AssetBundle
{
    public $sourcePath = '@codexten/yii/cron/assets';

    public $js = [
        'manager_actions.js',
    ];
}