<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Transaction $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'invoice_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Invoice ID...']],

            'invoice_schedule_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Invoice Schedule ID...']],

            'invoice_number' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Invoice Number...', 'maxlength' => 255]],

            'amount' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Amount...', 'maxlength' => 255]],

            'transaction_date' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'transaction_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Transaction ID...', 'maxlength' => 255]],

            'payment_gateway_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payment Gateway ID...']],

            'currency_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Currency ID...']],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...', 'maxlength' => 255]],

            'response' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Response...', 'maxlength' => 255]],

            'payee_account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payee Account ID...']],

            'user_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter User ID...']],

            'payor_account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payor Account ID...']],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
