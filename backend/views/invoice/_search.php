<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\search\Invoice $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="invoice-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'invoice_number') ?>

    <?= $form->field($model, 'invoice_type') ?>

    <?= $form->field($model, 'payor_account_id') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'due_date') ?>

    <?php // echo $form->field($model, 'last_payment_date') ?>

    <?php // echo $form->field($model, 'created_by_user_id') ?>

    <?php // echo $form->field($model, 'payee_account_id') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'updated') ?>

    <?php // echo $form->field($model, 'flag') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'memo') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'external_invoice_number') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
