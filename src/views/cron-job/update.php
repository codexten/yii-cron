<?php

use codexten\yii\web\widgets\UpdatePage;

/* @var $this yii\web\View */
/* @var $model codexten\yii\cron\models\CronJob */

$this->title = Yii::t('app', 'Update Cron Job: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
?>
<?php $page = UpdatePage::begin() ?>

<?php $page->beginContent('form') ?>

<?= $this->render('_form', ['model' => $model]) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
