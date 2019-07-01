<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\InvoiceTemplate $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="invoice-template-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Name...', 'maxlength' => 255]],

            'subject' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Subject...', 'maxlength' => 255]],

            'body' => ['type' => Form::INPUT_TEXTAREA, 'options' => ['placeholder' => 'Enter Body...','rows' => 6]],

            'language_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Language ID...']],

            'account_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Account ID...']],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
