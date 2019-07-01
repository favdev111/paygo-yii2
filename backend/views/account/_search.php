<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\search\Account $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="account-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'account_type_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'subdomain') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'privacy') ?>

    <?php // echo $form->field($model, 'terms') ?>

    <?php // echo $form->field($model, 'smtp_server') ?>

    <?php // echo $form->field($model, 'use_authentication') ?>

    <?php // echo $form->field($model, 'use_secure_connection') ?>

    <?php // echo $form->field($model, 'use_secure_connection_type') ?>

    <?php // echo $form->field($model, 'smtp_username') ?>

    <?php // echo $form->field($model, 'smtp_password') ?>

    <?php // echo $form->field($model, 'smtp_port') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
