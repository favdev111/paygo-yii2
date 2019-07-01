<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\InvoiceDetail $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="invoice-detail-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'item_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Item ID...']],

            'title' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Title...', 'maxlength' => 255]],

            'description' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Description...', 'maxlength' => 255]],

            'item_amount' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Item Amount...', 'maxlength' => 255]],

            'tax_type_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Tax Type ID...']],

            'tax_type' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Tax Type...', 'maxlength' => 255]],

            'tax_amount' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Tax Amount...', 'maxlength' => 255]],

            'discount_type' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Discount Type...', 'maxlength' => 255]],

            'subtotal' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Subtotal...', 'maxlength' => 255]],

            'invoice_id' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Invoice ID...']],

            'flag' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Flag...']],

            'discount_amount' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'created' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

            'updated' => ['type' => Form::INPUT_WIDGET, 'widgetClass' => DateControl::classname(),'options' => ['type' => DateControl::FORMAT_DATETIME]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>

</div>
