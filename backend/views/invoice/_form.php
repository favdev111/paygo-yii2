<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\Invoice $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="invoice-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'invoice_number' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Invoice Number...', 'maxlength' => 255]],

            'invoice_type' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Invoice Type...', 'maxlength' => 255]],

            'payor_account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payor Account ID...']],

            'status' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Status...', 'maxlength' => 255]],

            'due_date' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'created_by_user_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Created By User ID...']],

            'payee_account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Payee Account ID...']],

            'notes' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Notes...','rows' => 6]],

            'memo' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Memo...','rows' => 6]],

            'amount' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Amount...', 'maxlength' => 255]],

            'external_invoice_number' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter External Invoice Number...', 'maxlength' => 255]],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'last_payment_date' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
