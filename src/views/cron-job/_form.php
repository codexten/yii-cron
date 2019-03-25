<?php

use codexten\yii\cron\models\CronJob;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model CronJob */
?>

<div class="row">
    <div class="col-md-6">

    <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'name') ?>

        <?= $form->field($model, 'comment') ?>

        <?= $form->field($model, 'run_time') ?>

        <?= $form->field($model, 'run_command') ?>

        <?= $form->field($model, 'status') ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>