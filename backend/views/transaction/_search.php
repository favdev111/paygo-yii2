<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\search\Transaction $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="transaction-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'invoice_id') ?>

    <?= $form->field($model, 'invoice_schedule_id') ?>

    <?= $form->field($model, 'invoice_number') ?>

    <?= $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'transaction_date') ?>

    <?php // echo $form->field($model, 'transaction_id') ?>

    <?php // echo $form->field($model, 'payment_gateway_id') ?>

    <?php // echo $form->field($model, 'currency_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'response') ?>

    <?php // echo $form->field($model, 'payor_account_id') ?>

    <?php // echo $form->field($model, 'payee_account_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
